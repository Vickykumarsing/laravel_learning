<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urlmanager extends Controller
{
    public function index()
    {
        return view('homeurl');
    }
}
