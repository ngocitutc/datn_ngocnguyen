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
        Route::get('/', 'AdminController@userIndex')->name(USER_INDEX);
        Route::get('create', 'AdminController@userCreate')->name(USER_CREATE);
        Route::post('store', 'AdminController@storeCreate');
    });
});

Route::namespace('Teacher')->group(function () {
    Route::prefix('teacher')->group(function () {
        Route::prefix('topic')->group(function () {
            Route::get('/', 'TeacherController@getTopics')->name(TEACHER_TOPIC_INDEX);
            Route::get('/create', 'TeacherController@create')->name(TEACHER_TOPIC_CREATE);
            Route::get('/offer', 'TeacherController@offer')->name(TEACHER_TOPIC_OFFER);
            Route::post('/store', 'TeacherController@store')->name(TEACHER_TOPIC_STORE);
        });
        Route::prefix('student')->group(function () {
            Route::get('/', 'TeacherController@getStudent')->name(TEACHER_STUDENT);
            Route::get('/offer', 'TeacherController@getStudentOffer')->name(TEACHER_STUDENT_OFFER);
        });
    });
});

Route::namespace('Student')->group(function () {
    Route::prefix('student')->group(function () {
        Route::prefix('topic')->group(function () {
            Route::get('/', 'StudentController@getTopics')->name(STUDENT_TOPIC);
        });
        Route::prefix('teacher')->group(function () {
            Route::get('/', 'StudentController@getTeachers')->name(STUDENT_TEACHER);
        });
    });
});



