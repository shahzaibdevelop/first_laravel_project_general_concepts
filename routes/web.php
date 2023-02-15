<?php

use App\Http\Controllers\testing;
use Illuminate\Support\Facades\Route;

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

// Only Returning The Id 

// Route::get('/testing/{id}', function ($id) {
//     return "The ID number is : ".$id;
//     // return  print('The Id Number is '.$id);
//     // return  print_r('The Id Number is '.$id);

// });

// Returning The Id in the View 
//get_defined_vars() is a parameter in view() it take all the variables 
//mentioned and take it to view and then we can easily use those variables using their name
// Route::get('/testing/{id}', function ($id) {
//     return view('testing', get_defined_vars());
// });


// Multiple Parameters
Route::get('/testing2/{id}/{name}', function ($id,$name) {
    return "The ID number is : $id "."<br>"."The Name is : $name";
});

//Doing Above Using Controllers
//Route telling Route::get('if user goes to this url/entering this in url',[go to this controller class::class,'and then in this function' ])
Route::get('/testing/{id}',[testing::class,'testing']);
