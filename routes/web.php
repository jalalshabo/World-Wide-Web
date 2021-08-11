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

Route::get('/', 'PagesController@index');
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/facultystaff', 'PagesController@facultystaff');
Route::get('/login', 'PagesController@login');
Route::get('/schoolmap', 'PagesController@schoolmap');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/student', 'PagesController@student');
Route::get('/static', 'PagesController@static');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Course', 'CoursesController');
Route::resource('User', 'UsersController');
Route::resource('Enrolled', 'Enrolleds');
