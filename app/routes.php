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




// SESSIONS

Route::get('login',   ['as' => 'login_path',  'uses' => 'SessionsController@create' ]);
Route::post('login',  ['as' => 'login_path',  'uses' => 'SessionsController@store'  ]);

Route::get('logout',  ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);



// REQUESTS

Route::get('request',   ['as' => 'request_path', 'uses' => 'RequestsController@create']);
Route::post('request',  ['as' => 'request_path', 'uses' => 'RequestsController@store']);


// TRANSLATIONS

Route::get('request',   ['as' => 'translation_path', 'uses' => 'TranslationsController@create']);
Route::post('request',  ['as' => 'translation_path', 'uses' => 'TranslationsController@store']);






