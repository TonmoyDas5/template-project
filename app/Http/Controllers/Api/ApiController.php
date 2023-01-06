<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studentlist;
use App\Models\Department;

class ApiController extends Controller
{
    public function student(){
        $student = Studentlist::all([
            'student_name',
            'student_address',
        ]);


        return response()->json([
            'success'=>'true',
            'message'=>'Doctor list show',
            'data'=>$student
        ]);
    }


    public function department(){
        $department =Departmet::all();


        return response()->json([
            'success'=>'true',
            'message'=>'Department list show',
            'data'=>$department
        ]);
    }
}
