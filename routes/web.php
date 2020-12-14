<?php

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

Route::get('/show','Crud@index');
Route::get('/insert','Crud@create');
Route::get('/edit/{poetCode}','Crud@show');
Route::get('/borrar/{poetCode}','Crud@destroy');
Route::post('/save','Crud@store');
Route::post('/update','Crud@update');

