<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function store1(Request $request){
        $request->validate([
            'fname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        return redirect('/welcome');
}
}
