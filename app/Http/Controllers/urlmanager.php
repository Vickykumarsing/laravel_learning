<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cust;

class urlmanager extends Controller
{
   /* public function index()
    {
        return view('registration');
    }
    public function registration(Request $request)
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
*/
    public  function index()
    {
        $url = url('/customer/store');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('registration')->with($data);
    }
   

    public function store(Request $request)
    {
        
 
        $cust = new cust;
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
   

    public function view(){
        $cust = cust::all();
        $data = compact('cust');
    
        return view('cust_view')->with($data);
    }
    public function delete($id)
    {
      $cust = cust::find($id);
      if(!is_null($cust))
      {
         $cust->delete();
      }
      return redirect('customer');

    }
    
    public function edit($id)
    {
      $cust = cust::find($id);
      if(is_null($cust))
      {
        // not found
        return redirect('customer');
      }
      else{
       // find
      
       $url = url('customer/update') ."/". $id;
       $title = "Update Customer";
         $data = compact('cust', 'url','title');
       
         return view('registration')->with($data);
      
      }
      

    }
    public function update($id, Request $request)
    {
      $cust = cust::find($id);
      
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

}

