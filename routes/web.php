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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'HomeController@add_form');
Route::post('/add_form', 'HomeController@insert_form');
Route::get('/edit/{id}', 'HomeController@edit_form');
Route::post('/edit_form', 'HomeController@update_form');
Route::get('/delete/{id}', 'HomeController@delete_records');
