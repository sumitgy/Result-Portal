<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    StudentController,
    FacultyController

};

Route::get('/', function () {
    return view('index');
})->name('result_portal');

Route::get('/student_name',[StudentController::class,'student_name'])->name('student_name');
Route::get('/student_name',[StudentController::class,'student_name'])->name('student_name');
Route::get('/student_rollno',[StudentController::class,'student_rollno'])->name('student_rollno');
Route::get('/roll_no/{id}',[StudentController::class,'roll_no'])->name('roll_no');




Route::post('/rollno_store',[StudentController::class,'rollno_store'])->name('rollno_store');
Route::post('/name_store',[StudentController::class,'name_store'])->name('name_store');




Route::get('/login',[FacultyController::class,'login'])->name('login');
Route::get('/registration',[FacultyController::class,'registration'])->name('registration');


Route::post('/loginpost',[FacultyController::class,'loginpost'])->name('loginpost');
Route::group(['middleware' => 'userlogin'], function () {
Route::get('/home',[FacultyController::class,'home'])->name('home');
Route::get('/marks_form',[FacultyController::class,'marks_form'])->name('marks_form');
Route::get('/marks_edit/{id}',[FacultyController::class,'marks_edit'])->name('marks_edit');
Route::post('/store',[FacultyController::class,'store'])->name('store');
Route::post('/marks_store',[FacultyController::class,'marks_store'])->name('marks_store');
Route::post('/marks_update',[FacultyController::class,'marks_update'])->name('marks_update');

});












