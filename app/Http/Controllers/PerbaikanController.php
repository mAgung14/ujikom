<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
    function index(){
        return view('perbaikan.perbaikanadd');
    }
}
