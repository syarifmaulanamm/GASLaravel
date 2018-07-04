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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jamaah', 'JamaahController@index')->name('jamaah');
Route::get('/jamaah/create', 'JamaahController@create')->name('createJamaah');
Route::get('/jamaah/after-create', 'JamaahController@afterCreate')->name('afterCreateJamaah');
Route::get('/jamaah/upload', 'JamaahController@upload')->name('uploadFileJamaah');