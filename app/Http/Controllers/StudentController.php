<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use View;

class StudentController extends Controller
{
    //練習九: 加入getStudentData及getStudentScore函數
    //Ch08_練習五
    public function getStudentData($student_no){
        //return "學號: ".$student_no;
        /*return View::make('score',['student_no' => $student_no,
            'subject' => null]);*/
        $student=Student::where('no',$student_no)->firstOrFail();
        return View::make('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>null
        ]);
    }

    public function getStudentScore($student_no, $subject = null){
        //return "學號：" . $student_no . "的" . ((is_null($subject)) ? "所有科目" : $subject) . "成績";
        /*return View::make('score', ['student_no' => $student_no,
            'subject' => $subject]);*/
        $student=Student::where('no',$student_no)->firstOrFail();
        return View::make('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>$subject
        ]);
    }
}
