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


Route::get('/', 'HomeController@index');

Route::get('course/registration/','CourseController@registerCourse');
Route::post('course/registration/', 'CourseController@store');

Route::get('course/{course}','CourseController@show');

Route::get('course/{course}/assignment/{assignmentID}','AssignmentController@show');



Route::get('/', 'HomeController@index');

Route::get('course/{course}','CourseController@show');

Route::get('course/{course}/assignment/{assignmentID}','AssignmentController@show');

Auth::routes();