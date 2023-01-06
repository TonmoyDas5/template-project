<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studentlist;

class LabtestController extends Controller
{
    public function student(){
        return view('backend.pagees.studentlist.student');
    }
    

    public function submit(Request $request){
        studentlist::create([
            'student_name'=>$request->student_name,
            'student_address'=>$request->student_address,

        ]);
        return redirect()->back();

    }

    public function show(){
        return view('backend.pagees.teacher.teacherList');
    }
    public function createform(){
        return view('backend.pagees.teacher.teacherfrom');
    }
}


