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
Route::get('/home', 'myprofilecontroller@index')->name('home');
Route::get('/profile/{user}', 'proiflecontroller@profile')->name('profile.show');
Route::get('/p','posts@create');
