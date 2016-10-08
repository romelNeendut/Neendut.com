<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/newsfeed', 'NewsfeedsController@index');

Route::get('/mybusiness', 'BusinessesController@index');
Route::get('/submit', 'BusinessesController@create');

Route::get('/profile/get-profile', 'ProfilesController@getProfile');
Route::post('/profile/update', 'ProfilesController@update');
Route::get('/profile/{profile_id}', 'ProfilesController@show');

Route::get('/sites', 'SitesController@index');
Route::get('/sites/{store_name}', 'SitesController@show');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
