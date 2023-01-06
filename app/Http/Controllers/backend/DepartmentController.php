<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Department;
use app\models\Depermentcontroller;

class DepartmentController extends Controller
{
    public function show(){
        $dptshow=Department::all();
        return view('backend.pagees.department.departmentList',compact('dptshow'));
    }

    public function create(){
        return view('backend.pagees.department.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $validator=validator::make($request->all(),[
            'department_name'=> 'required',

        ]);
        if($validator->fails()){
            return redirect(url('form-create'))->withErrors($validator)->withInput();
        }
        //inser code
        Department::create([
            'department_name' => $request->department_name,
        ]);
        return back()->with('msg','department add successfully');
    }

    public function view(){
        return view('backend.pagees.institute.list');
    }
    
    public function form(){
        return view('backend.pagees.institute.form');
    }


    public function views(){
        return view('backend.pagees.class.list');
    }
    
        
    
    public function from(){
        return view('backend.pagees.class.form');
    }


    
}
