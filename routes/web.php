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


Route::get('/conseiller', 'conseillerController@index');


Route::post('/conseiller/create','conseillerController@create');


Route::get('/', 'conseillerController@connect');
Route::post('login', 'conseillerController@login');

Route::post('/jeune/dashboard_account/update','JeuneController@updateFiche');


Route::get ('/jeune/creation', 'JeuneController@create');

Route::get ('/jeune/login', 'JeuneController@login');
Route::post ('/jeune/login', 'JeuneController@validLogin');

Route::get ('/jeune/home', 'JeuneController@home');

Route::get ('/jeune', 'JeuneController@index');

 

Route::get('/conseiller/dashboard_jeunes', function(){
	$session = session('user');
	return view('layouts.dashboard-conseiller.navbar')->with('user',$session);
});

Route::get('/conseiller/dashboard_jeunes/ajouter', function(){
	$session = session('user');
	return view('layouts.dashboard-conseiller.nouvel-inscrit')->with('user',$session);
});

Route::post('/conseiller/dashboard_jeunes/ajouter', "JeuneController@store");

Route::get('/conseiller/dashboard_jeunes/liste_complete', function() {
	$session = session('user');
	return view('layouts.dashboard-conseiller.liste-complete');
});

Route::get('/conseiller/dashboard_jeunes/mes-jeunes', "conseillerController@dashboard");

Route::get('/conseiller/dashboard_profil', function() {
	$session = session('user');
	return view('layouts.dashboard-conseiller.profil')->with('user',$session);;
});