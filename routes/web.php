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

Route::get('/about', function () { 
    echo 'Nama : Naufal Rozan'."<br>";
    echo 'NIM  : 2031710124';
});

Route::get('/articles/{id}', function ($id) { 
    echo 'Nama  : Naufal Rozan'."<br>";
    echo 'ID    : ';
    return $id;
});