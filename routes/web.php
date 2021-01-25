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

/* Route::get('/', function () {
    return view('layouts.index');
}); */

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('period', 'PeriodController');
Route::patch('period', 'PeriodController@update');

Route::resource('range', 'RangeController');
Route::patch('range', 'RangeController@update');

Route::resource('course', 'CourseController');
Route::patch('course', 'CourseController@update');

Route::resource('teacher', 'TeacherController');
Route::patch('teacher', 'TeacherController@update');

Route::resource('matter', 'MatterController');
Route::patch('matter', 'MatterController@update');

Route::resource('student', 'StudentController');
Route::patch('student', 'StudentController@update');