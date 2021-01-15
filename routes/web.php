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


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',"\App\Http\Controllers\VehiculeController@index");
Route::get('/edit/{id}',"\App\Http\Controllers\VehiculeController@edit");
Route::get('/show/{id}',"\App\Http\Controllers\VehiculeController@show");
Route::get('/create',"\App\Http\Controllers\VehiculeController@create");
Route::post('/store',"\App\Http\Controllers\VehiculeController@store");
Route::post('/update/{id}',"\App\Http\Controllers\VehiculeController@update");
Route::delete('/delete/{id}',"\App\Http\Controllers\VehiculeController@destroy");
