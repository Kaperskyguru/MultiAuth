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

Auth::routes();

Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/scout', 'ScoutController@index')->name('scout')->middleware('scout');
Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');
// Route::get('/home', 'AcademicController@index')->name('home');