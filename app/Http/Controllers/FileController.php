<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // view home page
    public function home(){
        return view('newsbox.index');
    }

    // view sports catagory page
    public function sports(){
        return view('newsbox.sports');
    }

    // view entertainment catagory page
    public function entertainment(){
        return view('newsbox.entertainment');
    }

    // view Science catagory page
    public function science(){
        return view('newsbox.science');
    }

    // view Business catagory page
    public function business(){
        return view('newsbox.business');
    }

    // view Technology catagory page
    public function technology(){
        return view('newsbox.technology');
    }

    // view Travel catagory page
    public function travel(){
        return view('newsbox.travel');
    }

    // view User Signup page
    public function userSignup(){
        return view('newsbox.user_signup');
    }

    // view User Signup page
    public function userLogin(){
        return view('newsbox.user_login');
    }
}
