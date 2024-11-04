<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basic1;
use App\Http\Controllers\singleAction;
use App\Http\Controllers\formValidation;
use App\Http\Controllers\component;
//use App\Models\Cust;
//use App\Http\Controllers\custcontroller;
use App\Http\Controllers\urlmanager;
//use App\Http\Controllers\addlist;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function(){
    echo "Hello world ";
});
Route::get('/demo', function(){
   return view('demo');
});

Route::get('/demo/{name}/{id?}', function($name, $id = null){
    $data = compact('name','id');
    return view('demo')->with($data);
});


Route::get('/{name?}', function($name = null){

    $demo = '<h1>welcome</h1>';
    $data = compact('name','demo');
    return view('home')->with($data);
}); 

Route::get('/',[basic1::class, 'index']);

Route::get('/about', 'App\Http\Controllers\basic1@about');

Route::get('/demo', singleAction::class); 

Route::get('/form', [formValidation::class, 'index']);
Route::post('/form', [formValidation::class, 'formValidation']); 
Route::get('/component', [component::class, 'component']);

Route::get('/cust',function(){
    $cust = Cust::all();
    echo "<pre>";
    print_r($cust->toArray());

});*/

Route::get('/cust',[custcontroller::class,'index']);

Route::post('/cust',[custcontroller::class,'cust']);
Route::get('/cust/view',[custcontroller::class,'view']);

Route::get('/',function()
{
   return view('homeurl');
});
Route::get('/customer/create',[urlmanager::class, 'index']);
//Route::get('/registration',[urlmanager::class, 'index']);
//Route::post('/registration',[urlmanager::class,'registration']);
Route::get('/customer',[urlmanager::class,'view']);
Route::post('/customer/store',[urlmanager::class,'store']);

Route::get('/customer/delete/{id}',[urlmanager::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[urlmanager::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[urlmanager::class,'update'])->name('customer.update');




