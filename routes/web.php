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


Route::get('/','IndexController@index')->name('home');
Route::get('/company/about','IndexController@about')->name('about');
Route::get('/company/contact','IndexController@contact')->name('contact');
Route::get('/company/portfolio','IndexController@portfolio')->name('portfolio');