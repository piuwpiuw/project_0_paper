<?php


//		le jeune
// login
Route::get ('/jeune', 'JeuneController@login');
Route::post ('/login', 'JeuneController@validLogin');
// creer un compte (pas necessaire dans la version finale)
Route::get ('/jeune/creer', 'JeuneController@create');
Route::post ('/jeune/creer', 'JeuneController@store');
// erreur
Route::get ('/jeune/erreur/{message}', 'JeuneController@error');
// home (pas necessaire dans la version finale)
Route::get ('/jeune/home/{jeune}', ['as' => 'jeuneHome', 'uses' => 'JeuneController@home']);
// fiche d'accueil
Route::get ('/jeune/accueil/{jeune}', 'JeuneController@reception');
Route::post ('/jeune/accueil', 'JeuneController@receptionFill');
