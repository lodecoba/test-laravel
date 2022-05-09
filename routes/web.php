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

Route::get('/input-user', 'App\Http\Controllers\DemoController@inputUser')->name('inputUser');
Route::get('/output-user', 'App\Http\Controllers\DemoController@outputUser')->name('outputUser');
