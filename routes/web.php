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

// le jeune
Route::get ('/jeune/erreur/{message}', 'JeuneController@error');

Route::get ('/jeune/creation', 'JeuneController@create');
Route::post ('/jeune/creation', 'JeuneController@store');

Route::get ('/jeune/login', 'JeuneController@login');
Route::post ('/jeune/login', 'JeuneController@validLogin');

Route::get ('/jeune/home', 'JeuneController@home');

Route::get ('/jeune', 'JeuneController@index');
Route::get ('/', 'JeuneController@index');