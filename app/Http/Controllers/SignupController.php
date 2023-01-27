<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(){
        return view('signup');
    }
    public function store(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
           'confirm_password'=>'required|same:password'
        ]);
        return redirect('/welcome');
        // echo '<pre>';
        // print_r($request->all());
    }
}
