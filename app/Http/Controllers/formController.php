<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function form(Request $request)
    {
       
        echo "<pre>";
        print_r($request->all());

    }

}
