<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cust;

class cust extends Controller
{
    public function index()
    {
       return view('cust');
    }
    public function cust(Request $request)
    {
       
       echo "<pre>"; 
       print_r($request->all());

       $ccust = new Cust;
       $ccust->name = $request['name'];
       $ccust->email = $request['email'];
       $ccust->address = $request['address'];
       $ccust->state = $request['state'];
       $ccust->country = $request['country'];
       $ccust->password = md5($request['password']);
       $ccust->dob= $request['dob'];
       $ccust->save();

    }

}
