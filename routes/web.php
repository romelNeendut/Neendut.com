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

Route::get('/admin', 'DashboardController@index');
Route::get('/profile', 'DashboardController@profile');
Route::get('/mybusiness', 'DashboardController@mybusiness');

Route::get('/sites', 'SitesController@index');
Route::get('{store_name}', 'SitesController@show');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
