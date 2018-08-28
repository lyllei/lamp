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

Route::get('/select','DBController@select');
Route::get('/insert','DBController@insert');
Route::get('/trans','DBController@trans');
Route::get('/delete','DBController@delete');
Route::get('/sz','DBController@sz');
Route::get('/px','DBController@px');