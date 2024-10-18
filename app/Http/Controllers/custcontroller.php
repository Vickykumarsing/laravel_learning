<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cust;

class custcontroller extends Controller
{
    public function index()
    {
        return view('cust');
    }
    public function cust(Request $request)
    {
        echo "<pre>";
       print_r($request->all());

       $cust = new Cust;
       $cust->name = $request['name'];
       $cust->email = $request['email'];
       $cust->address = $request['address'];
       $cust->state = $request['state'];
       $cust->country = $request['country'];
       $cust->password = md5($request['password']);
       $cust->dob= $request['dob'];
       $cust->save();
       return redirect('/cust//view');
    
    }
    public function view(){
        $cust = cust::all();
        $data = compact('cust');
    
        return view('cust_view')->with($data);
    }
}
