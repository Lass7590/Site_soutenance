<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('users.home');
    }
    public function login(){
        return view('users.login');
    }
    public function signup(){
        return view('users.signup');
    }
}
