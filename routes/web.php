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

Route::view('form','form');
Route::post('form','FormController@form');
Route::get('/index', function () {
    return view('index');
});

Route::get('data/{name}', function ($name) {
    return "Welcome $name";
   // return view('welcome');
});

Route::redirect('/mine','/');
Route::get('conview','ViewController@view');
Route::view('mw','unauth');
Route::get('api','ApiController@index');

Route::view('file','file');
Route::post('/file','FormController@file');

Route::get('db','DbController@index');
Route::get('mydb','DbController@database');
Route::get('model','DbController@model');