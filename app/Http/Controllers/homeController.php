<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        return view('homepage.home');
    }

    function home(){
        return view('admin.admin');
    }


}
