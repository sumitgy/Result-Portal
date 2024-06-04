<?php

namespace App\Http\Controllers;
use App\Models\{
    User,
    Student
};
use Illuminate\Support\Facades\{
    Auth,
    Session,
    Hash,
    DB,

};
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    //
    public function login()
    {
        return view('Faculty.login');
    }

    public function registration()
    {
        $data['user_list'] = User::get();
        return view('Faculty.registration',$data);
    }

    public function home()
    {
        $faculty_id = Auth::user()->id;
        $data['student_list'] = Student::where('faculty_id',$faculty_id)->get();
        return view('Faculty.home',$data);
    }


     //user register store
     public function store(Request $request){
        $request->validate( [
           'name'=>'required',
           'email' => 'required|unique:users|regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/',
           'password' => 'required|min:8',

        ]);

      
    $username = $request["name"];
    $email = $request["email"];
    $password = $request["password"];
    $admin_password = Hash::make($password);

    
    $User  = new User();
    $User->name =  $username;
    $User->email =  $email;
    $User->password =  $admin_password;
    $User->save();
    $message = 'User added Successfully';
     return redirect()->route('login')->with('success' ,$message);
    }

       // Condition Check Google 2fa Enable Or Disable
       public function loginpost(Request $request){
   
        // Validate user credentials
       if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            
            // Check if the user is deleted
            if ($user->delete_status == '1') {
                Auth::logout(); // Log the user out
                return back()->withErrors(['email' => 'Your account has been deleted.']);
                
            }
            // 2FA is valid or not enabled, proceed with login
            return redirect()->route('home');
            
        }
        // Invalid credentials
        return back()->withErrors(['email' => 'Invalid Email & Password !']);

    }

    public function marks_form()
    {
        return view('Faculty.marks_form');
    }

    public function marks_store(Request $request)
    {
        $faculty_id = Auth::user()->id;
        $name=$request['name'];
        $fname=$request['fname'];
        $clgname=$request['clgname'];
        $medium=$request['medium'];
        $rollno=$request['rollno'];
        $branch=$request['branch'];
        $year=$request['year'];

        $java=$request['java'];
        $php=$request['php'];
        $dsa=$request['dsa'];
        $ecom=$request['ecom'];
        $sdc=$request['sdc'];
        $network=$request['network'];
        
        $subjects_marks = array('java' => $java , "php" => $php , "dsa" => $dsa , "ecom" => $ecom , "sdc" => $sdc , "network" => $network);

        $Student  = new Student();
        $Student->faculty_id = $faculty_id;
        $Student->name = $name;
        $Student->father_name = $fname;
        $Student->college_name = $clgname;
        $Student->medium = $medium;
        $Student->roll_no = $rollno;
        $Student->branch = $branch;
        $Student->year = $year;
        $Student->subjects_marks = json_encode($subjects_marks);
        $Student->save();

        $message = 'User added Successfully';
        return redirect()->route('home')->with('success' ,$message);
    }

    public function marks_edit($id)
    {
        $data['marks_edit'] = Student::where('id',$id)->first();
        return view('Faculty.marks_edit',$data);
    }

    public function marks_update(Request $request)
    {
        $faculty_id = Auth::user()->id;
        $id = $request->id;
        $name=$request['name'];
        $fname=$request['fname'];
        $clgname=$request['clgname'];
        $medium=$request['medium'];
        $rollno=$request['rollno'];
        $branch=$request['branch'];
        $year=$request['year'];

        $java=$request['java'];
        $php=$request['php'];
        $dsa=$request['dsa'];
        $ecom=$request['ecom'];
        $sdc=$request['sdc'];
        $network=$request['network'];
        
        $subjects_marks = array('java' => $java , "php" => $php , "dsa" => $dsa , "ecom" => $ecom , "sdc" => $sdc , "network" => $network);

        $Student = Student::where('id',$id)->first();
        $Student->faculty_id = $faculty_id;
        $Student->name = $name;
        $Student->father_name = $fname;
        $Student->college_name = $clgname;
        $Student->medium = $medium;
        $Student->roll_no = $rollno;
        $Student->branch = $branch;
        $Student->year = $year;
        $Student->subjects_marks = json_encode($subjects_marks);
        $Student->update();

        $message = 'User update Successfully';
        return redirect()->route('home')->with('success' ,$message);
    }
}
