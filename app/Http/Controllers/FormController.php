<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('Form.form');
    }

    public function register(Request $request){
        print_r($request->all());
    }

    public function redirect(){
        return view('/welcome');
    }

    public function BladeView(){
        return view('Task8.welcome');
    }
}
