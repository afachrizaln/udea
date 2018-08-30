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

Route::group(['middleware' => 'visitor'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@login')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
});

Route::group(['middleware' => 'user'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::group(['prefix' => 'student', 'middleware' => 'student'], function() {
        Route::get('/dashboard', 'Student\DashboardController@index')->name('student.dashboard');
        Route::post('/join', 'Student\ClassroomController@join')->name('student.classroom.join');

        Route::get('/material', 'Student\MaterialController@index')->name('student.material');
        Route::get('/discussion', 'Student\DiscussionController@index')->name('student.discussion');
        Route::get('/discussion/{slug}', 'Student\DiscussionController@show')->name('student.discussion.show');
        Route::post('/discussion/{slug}/comment', 'Student\DiscussionController@comment')->name('student.discussion.comment');
        Route::get('/task', 'Student\TaskController@index')->name('student.task');
        Route::get('/task/{slug}', 'Student\TaskController@show')->name('student.task.show');
    });

    Route::group(['prefix' => 'lecturer', 'middleware' => 'lecturer'], function() {
        Route::get('/dashboard', 'Lecturer\DashboardController@index')->name('lecturer.dashboard');

        Route::get('/material', 'Lecturer\MaterialController@index')->name('lecturer.material');
        Route::get('/material/create', 'Lecturer\MaterialController@create')->name('lecturer.material.create');
        Route::get('/material/{slug}', 'Lecturer\MaterialController@show')->name('lecturer.material.show');
        Route::get('/discussion', 'Lecturer\DiscussionController@index')->name('lecturer.discussion');
        Route::get('/task', 'Lecturer\TaskController@index')->name('lecturer.task');
        
        Route::get('/course', 'Lecturer\CourseController@index')->name('lecturer.course');
        Route::get('/course/create', 'Lecturer\CourseController@create')->name('lecturer.create');
    });
});