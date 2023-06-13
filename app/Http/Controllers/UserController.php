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
    public function etudiant(){
        return view('users.etudiant');
    }
    public function rp(){
        return view('users.rp');
    }
    public function jury(){
        return view('users.jury');
    }
    public function encadreur(){
        return view('users.encadreur');
    }

    public function creer_compte(Request $request){
        $this->validate($request, ['email' => 'email|required',
                                    'password' => 'required|min:4']);
    }


}
