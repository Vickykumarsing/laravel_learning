<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class component extends Controller
{
    public function component(){
        return view('component');
    }
    public  function formValidation(Request $request){
       /* $request->validate(
           [
               'name'=> 'required',
               'email'=> 'required|email',
               'password'=> 'required|confirmed',
               'password_confirmed'=>'required',
           ]
           ); */
   echo"<pre>";
   print_r($request->all());

   }
}
