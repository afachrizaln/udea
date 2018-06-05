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


Route::get('/login', 'UserController@login')->name('login');
Route::get('/register', 'UserController@login')->name('register');
Route::post('/login', 'UserController@postLogin')->name('postLogin');
Route::post('/logout', 'UserController@postLogout')->name('postLogout');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('/course', 'Student\CourseController@index')->name('course');