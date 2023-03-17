<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailPerbaikanController extends Controller
{
    function index(){
        
        return view('detail.detail');
    }

    function add(){
        return view('detail.detailadd');
    }
}
