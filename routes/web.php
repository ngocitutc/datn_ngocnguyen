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
Route::get('/test', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
});

//Route::middleware(['auth'])->group(function () {
//    Route::get('/', 'HomeController@index');
//});

Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function () {
    Route::post('login', 'LoginController@login')->name(LOGIN);
    Route::get('login', 'LoginController@create')->name(SHOW_LOGIN);
    Route::get('logout', 'LoginController@logout')->name(LOGOUT);
});

Route::namespace('Admin')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('create', 'AdminController@userCreate')->name(USER_CREATE);
    });
});

