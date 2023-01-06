<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;


class BackendController extends Controller
{
    public function index(){
        return view('backend.master');
    }
    public function admin(){
        return view('backend.main');
    }
}
