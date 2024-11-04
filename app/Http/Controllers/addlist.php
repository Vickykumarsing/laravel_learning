<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cust;


/*class addlist extends Controller
{
    public function index()
    {
        return view('create');

    }
    public function store(Request $request)
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
        $cust->gender= $request['gender'];
        $cust->save();
        return redirect('/customer');
    }
   
    
}*/
