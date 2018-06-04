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

Route::get('/', 'BladeController@index');
Route::get('/about', 'BladeController@about');
Route::get('/work', 'BladeController@work');
Route::get('/portfolio_detail', 'BladeController@portfolio_detail');
Route::get('/contact', 'BladeController@contact');
