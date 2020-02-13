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
Route::get('/', function(){
   return view('index');
});
Route::get('/table', function(){
   return view('table');
});
Route::get('students', 'StudentController@index')->name('home');
Route::get('students/create', 'StudentController@create');
Route::post('students', 'StudentController@store')->name('student.store');
Route::get('students/{student}', 'StudentController@show');
Route::get('students/edit/{student}', 'StudentController@edit');
Route::post('students/edit/{student}', 'StudentController@update')->name('student.update');
Route::get('students/delete/{student}', 'StudentController@destroy')->name('student.delete');
