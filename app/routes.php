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


/*
Route::get('/', function()
{
	return View::make('hello');
});
*/


Route::get('/home', 'HomeController@index');
Route::get('/', 'BookingController@index');
Route::post('/results', 'BookingController@search1');
Route::post('/verification','BookingController@create');

Route::get('/prices', 'BookingController@prices');

Route::get('/admin', 'AdminController@index');
