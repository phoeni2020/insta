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
    return view('home');
});

Auth::routes();
Route::get('/home', 'myprofilecontroller@index')->name('home');
Route::get('/profile/create', 'proiflecontroller@create')->name('profile.create');
Route::post('/profile/save/{id}','proiflecontroller@save');
Route::get('/profile/{user}', 'proiflecontroller@profile')->name('profile.show');
Route::get('/profile/edit/{user}','proiflecontroller@edit')->name('profile.edit');
Route::patch('/profile/{userid}','proiflecontroller@update')->name('profile.update');
Route::get('/p/create','posts@create');
Route::post('/p','posts@store');
Route::get('/p/{post}','posts@show');

