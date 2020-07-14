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
Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function () {
    Route::post('login', 'LoginController@login')->name(LOGIN);
    Route::get('login', 'LoginController@create')->name(SHOW_LOGIN);
    Route::get('logout', 'LoginController@logout')->name(LOGOUT);
    Route::get('reset-password', 'ForgotPasswordController@index')->name(FORGOT_PASSWORD_INDEX);
});
Route::middleware('auth')->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/', 'AdminController@userIndex')->name(USER_INDEX);
            Route::get('/create', 'AdminController@userCreate')->name(USER_CREATE);
            Route::post('/store', 'AdminController@storeCreate');
            Route::get('/export-file/{role}', 'AdminController@exportFile')->name(USER_EXPORT_FILE);
            Route::get('/list-teacher', 'AdminController@listTeacher')->name(USER_LIST_TEACHER);
            Route::get('/list-student', 'AdminController@listStudent')->name(USER_LIST_STUDENT);
            Route::get('/list-project-student', 'AdminController@listProjectStudent')->name(USER_LIST_PROJECT_STUDENT);
        });
    });
    Route::namespace('Teacher')->group(function () {
        Route::prefix('teacher')->middleware('role:teacher')->group(function () {
            Route::prefix('topic')->group(function () {
                Route::get('/', 'TeacherController@getTopics')->name(TEACHER_TOPIC_INDEX);
                Route::get('/create', 'TeacherController@create')->name(TEACHER_TOPIC_CREATE);
                Route::get('/offer', 'TeacherController@offer')->name(TEACHER_TOPIC_OFFER);
                Route::post('/store', 'TeacherController@store')->name(TEACHER_TOPIC_STORE);
            });
            Route::prefix('student')->group(function () {
                Route::get('/', 'TeacherController@getStudent')->name(TEACHER_STUDENT);
                Route::get('/offer', 'TeacherController@getStudentOffer')->name(TEACHER_STUDENT_OFFER);
                Route::post('/accept', 'TeacherController@acceptStudentOffer')->name(TEACHER_STUDENT_ACCEPT_OFFER);
                Route::post('/topic/accept', 'TeacherController@acceptTopicStudent')->name(TEACHER_ACCEPT_TOPIC_STUDENT);
                Route::post('/topic/remove', 'TeacherController@removeTopicStudent')->name(TEACHER_REMOVE_TOPIC_STUDENT);
            });
            Route::prefix('project')->group(function () {
                Route::get('/rate/{id}', 'TeacherController@rateProject')->name(TEACHER_RATE_PROJECT);
                Route::post('/rate', 'TeacherController@storeRateProject')->name(TEACHER_RATE_PROJECT_STORE);
            });
        });
    });
    Route::namespace('Student')->group(function () {
        Route::prefix('student')->middleware('role:student')->group(function () {
            Route::prefix('topic')->group(function () {
                Route::get('/', 'StudentController@getTopics')->name(STUDENT_TOPIC);
                Route::get('/info/{id}', 'StudentController@showInfoTopic')->name(STUDENT_TOPIC_INFO);
                Route::get('/register', 'StudentController@registerTopic')->name(STUDENT_REGISTER_TOPIC);
                Route::post('/register', 'StudentController@storeRegisterTopic')->name(STUDENT_REGISTER_TOPIC_STORE);
            });
            Route::prefix('teacher')->group(function () {
                Route::get('/', 'StudentController@getTeachers')->name(STUDENT_TEACHER);
                Route::get('/info/{id}', 'StudentController@infoTeacher')->name(STUDENT_TEACHER_INFO);
                Route::post('/register', 'StudentController@registerTeacher')->name(STUDENT_TEACHER_REGISTER);
            });
            Route::prefix('project')->group(function () {
                Route::get('/', 'StudentController@createProject')->name(STUDENT_PROJECT_ADD);
                Route::get('/info', 'StudentController@infoProject')->name(STUDENT_PROJECT_INFO);
                Route::post('/store', 'StudentController@storeProject')->name(STUDENT_PROJECT_STORE);
            });
        });
    });

    Route::namespace('Dean')->group(function () {
        Route::prefix('dean')->middleware('role:dean')->group(function () {
            Route::get('/topic', 'DeanController@getTopics')->name(DEAN_TOPIC);
            Route::post('/topic', 'DeanController@activeTopic')->name(DEAN_TOPIC_ACTIVE);
            Route::get('/teacher-student', 'DeanController@teacherStudent')->name(DEAN_TEACHER_STUDENT);
            Route::get('/semester', 'DeanController@semester')->name(DEAN_SEMESTER);
        });
    });
});



