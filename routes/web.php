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
//profile Routs section
Route::get('/profile/create', 'proiflecontroller@create')->name('profile.create');
Route::post('/profile/save/{id}','proiflecontroller@save')->name('profile.save');
Route::get('/profile/edit/{user}','proiflecontroller@edit')->name('profile.edit');
Route::get('/profile/{user}', 'proiflecontroller@profile')->name('profile.show');
Route::patch('/profile/{userid}','proiflecontroller@update')->name('profile.update');
Route::post('/follow/{user}','followscontroller@store')->name('follow.store');

//posts Routs section
Route::get('/posts/create','posts@create')->name('post.create');
Route::post('/posts/store','posts@store')->name('post.store');
Route::get('/posts/{post}','posts@show')->name('post.show');

