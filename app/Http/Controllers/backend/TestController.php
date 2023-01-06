<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function doctor(){
        return view('backend.category.doctorname');
    }

    public function dashboard(){
        return view('backend.main');
    }
}
