<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
    Student
};
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function student_name()
    {
        return view('Student.name');
    }

    public function student_rollno()
    {
        return view('Student.rollno');
    }

    public function rollno_store(Request $requet)
    {
        $rollno = $requet->rollno;
        $data['result'] = Student::where('roll_no',$rollno)->first();
        if($data['result'])
        {
            return view('Student.result',$data);
        }
        else
        {
            return redirect()->back()->with('error', 'Roll number does not exist.');
        }
        
    }

    public function name_store(Request $requet)
    {
        $name = $requet->name;
        $data['name_list'] = Student::where('name', 'LIKE', '%' . $name . '%')->get();
        if(!$data['name_list']->isEmpty())
        {
            return view('Student.name_list',$data);
        }
        else
        {
            return redirect()->back()->with('error', 'Name does not exist.');
        }
        

    }

    public function roll_no($id)
    {
        $rollno = $id;
        $data['result'] = Student::where('roll_no',$rollno)->first();
        if($data['result'])
        {
            return view('Student.result',$data);
        }
    }


    
}
