<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



Route::get('/', function () {
    return view('home');
});
Route::get('/modifierManga/{id}', ['as' => 'modifierManga',
    'uses' => 'MangaController@modifierManga']);
Route::post('/postmodifierManga/{id}', ['as' => 'postmodifierManga',
    'uses' => 'MangaController@postmodifierManga']);
Route::get('listerMangas', 'MangaController@getListeManga');
Route::get('listerMangasGenre', 'MangaController@listerGenre');
Route::get('/ajouterMangas', 'MangaController@ajoutManga');
Route::post('/ajoutManga', ['as' => 'postajouterManga',
    'uses' => 'MangaController@postajouterManga']);
Route::post('/postAfficherManga/{id}', ['as' => 'postAfficherManga',
    'uses' => 'MangaController@postAfficherMangaGenre']);
//Afficher le formulaire d'authentification
Route::get('/getLogin', 'VisiteurController@getLogin');
//Authentification du visiteur
Route::post('/login', 'VisiteurController@signIn');
//Deconnection du visiteur
Route::get('/getLogout', 'VisiteurController@signOut');


