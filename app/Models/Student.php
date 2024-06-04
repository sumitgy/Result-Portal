<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "userresult";

    protected $fillable = [
        'faculty_id',
        'name',
        'father_name',
        'college_name',
        'medium',
        'roll_no',
        'branch',
        'year',
        'subjects_marks',


    ];
    protected $primaryKey = "id";
    
}
