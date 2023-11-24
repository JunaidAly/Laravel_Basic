<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Customer;
use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo',function(){
//     return view('demo');
// });

Route::get('/demo/{name?}/{id?}',function($name , $id=null){
    // echo $name . " ";
    // echo $id;
     $data = compact('name', 'id');
     return view('demo')->with($data);
});

Route::any('/test',function(){
    echo 'Testing the Route';
});

Route::get('/customer',function(){
    // $customers = Customer::all();
    // echo "<pre>";
    // print_r($customers->toArray());
});
Route::get('/customer','CustomerController@getCustomer');