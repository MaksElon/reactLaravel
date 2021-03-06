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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::view('/{path?}', 'app');
Route::resource('auth', 'AuthController');//->middleware('auth');
Route::post('auth/login', 'AuthController@login');
Route::post('auth/register', 'AuthController@register');

Route::get('/', function () {
    return view('app');
});
