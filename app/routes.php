<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// STATIC PAGES

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);



Route::get('me', ['as' => 'me', 'uses' => 'RequestsController@me']);




Route::get('test', function() {

  new Lingoneer\Documents\Document;

  new Lingoneer\Requests\Request;


});



// REGISTRATION

Route::get('register',  ['as' => 'register_path', 'uses' => 'RegistrationController@create']);
Route::post('register', ['as' => 'register_path', 'uses' => 'RegistrationController@store']);

Route::get('profile',   ['as' => 'profile_path', 'uses' => 'RegistrationController@profile']);


Route::get('change_password', ['as' => 'change_password_path', 'uses' => 'RegistrationController@change_password']);


// SESSIONS

Route::get('login',   ['as' => 'login_path',  'uses' => 'SessionsController@create' ]);
Route::post('login',  ['as' => 'login_path',  'uses' => 'SessionsController@store'  ]);

Route::get('logout',  ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);



// REQUESTS

Route::get('request',   ['as' => 'request_path', 'uses' => 'RequestsController@create']);
Route::post('request',  ['as' => 'request_path', 'uses' => 'RequestsController@store']);


// TRANSLATIONS

Route::get('translations',   ['as' => 'translation_path', 'uses' => 'TranslationsController@index']);

Route::get('translations/create',   ['as' => 'translation_create', 'uses' => 'TranslationsController@create']);
Route::post('translations/create',  ['as' => 'translation_create', 'uses' => 'TranslationsController@store']);


Route::get('translations/{id}', ['as' => 'translation_show', 'uses' => 'TranslationsController@show']);

Route::get('translations/{id}/edit', ['as' => 'translation_edit', 'uses' => 'TranslationsController@edit']);


Route::post('translations/{id}/edit', ['as' => 'translation_edit', 'uses' => 'TranslationsController@update']);


// STATUSES

Route::get('{username}', function($username) {

  return $username;

});


Route::resource('nerds', 'NerdController');


