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
    return view('landing.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/{userid}','DashboardController@teacher')->name('teacher.dashboard');
;

Route::post('/create','DashboardController@store')->name('assignment.create');


Route::DELETE('delete/{id}','DashboardController@destroy')->name('assignment.delete');

Route::get('/assignment/details/{assignmentid}','AssignmentController@show')->name('show.assignment');

Route::PUT('/assignment/update/{id}','AssignmentController@update')->name('assignment.update');

Route::get('/student', function () {
    return view('student.login');
});


Route::POST('/student/login','StudentController@authenticate');



//student Register routes
Route::POST('/student/create','StudentController@register');

Route::get('register/students',function (){
    return view('student.register');
});

