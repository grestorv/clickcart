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
Route::get('/clickit', 'ClickController@index');
Route::get('/getClick', 'ClickController@getClick');
Route::get('/admin', 'AdminController@index');
Route::get('/clickcart', 'ClickController@clickcart');
