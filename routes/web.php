<?php

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
    echo "Home";
});
Route::get('/about', function () {
    echo "About";
});
Route::get('/contact', function () {
    echo "Contact";
});
Route::get('/user', function () {
    return view('user',['name'=>'Duck'],['email'=>'ducnguyen']);
});

Route::get('/user/{name}{email}',function ($name, $email){
   echo "<h2>User name = $name</h2>";
   echo "<h2>Email = $email</h2>";
});
Route::get('/user-name/{name?}',function ($name = 'Ducck'){
   echo "<h2>name = $name</h2>";
});
Route::get('/','HomeController@index');
