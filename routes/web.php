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

Auth::routes();

Route::get('/conseiller', 'conseillerController@index');

Route::get('/', 'HomeController@index');

Route::post('/conseiller/create','conseillerController@create');


// Route::get('/', 'JeuneController@index');
Route::get('/login', 'conseillerController@connect');
Route::post('login', 'conseillerController@login');

Route::post('/jeune/dashboard_account/update','JeuneController@updateFiche');

