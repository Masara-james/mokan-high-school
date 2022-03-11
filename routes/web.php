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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function(){
    return view('home');
});
Route::get('/student',"AdminController@index");
Route::post('/update/{id}', "AdminController@update");
Route::get('/delete/{id}', "AdminController@deletestudent");
Route::get('/create', "AdminController@create");
Route::get('/edit/{id}', "AdminController@edit");
Route::post('/store', "AdminController@store");
Route::get('/show/{id}', "AdminController@show");

