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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/form","FormController@index");
Route::post("/form/store","FormController@store");
Route::get("/view","FormController@show");
Route::get("/view/{id}/edit","FormController@edit");
Route::post("/view/{id}/update","FormController@update");
Route::get("/view/{id}/delete","FormController@destroy");