<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // view home page
    public function home(){
        return view('newsbox.index');
    }

    // view catagory page
    // public function catagory(){
    //     return view('newsbox.catagory');
    // }
}
