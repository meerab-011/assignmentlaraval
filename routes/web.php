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
    return view('welcome');
});


Route::get('/', function () {
    $name = 'Laravel Assignment!';
    return view('welcome', ['name' => $name]);
});



Route::get('about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});
