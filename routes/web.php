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
    return view('index');
})->name('index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Login Routes

Route::get('/login', 'LoginController@login')->name('login');

Route::get('/register', 'LoginController@register')->name('register');

Route::post('/register_account', 'LoginController@createAccount')->name('register_account');