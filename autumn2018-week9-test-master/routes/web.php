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
    return view('homepage');
});

Route::get('/homepage','HomeController@home');
Route::get('/hero/{hero}','HeroController@show');
Route::get('/hero','HeroController@index');

Route::post('/hero','HeroController@store');
Route::patch('/hero/{hero}','HeroController@edit');
Route::get('/hero/{hero}','HeroController@edit');
Route::patch('/hero/{hero}','HeroController@update');

Auth::routes();
