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

Route::get('/', 'PagesController@index')->name('main');
Route::get('reg', 'RegController@indexRegPages')->name('newaccount');
Route::post('regaccount','RegController@reg')->name('reg');
Route::get('/admin','AdminController@adminpages')->name('admin');
Route::get('edit/{id}', 'AdminController@edit')->name('edit');
Route::post('edits','AdminController@update')->name('update');
Route::get('auth','AdminController@auth')->name('auth');