<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Goal extends Controller
{
    public function index() 
    {
        return view('goal');
    }
}
