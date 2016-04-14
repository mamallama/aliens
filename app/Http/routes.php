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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/view', 'RecordsController@showAll');

Route::get('/new','RecordsController@showNew');
 
Route::get('/edit', 'RecordsController@showEdit');

Route::get('contact', function () {
	return 'Hello Aliens';
});

Route::get('contact/members', function () {
	return 'Hello, Members';
});

Route::get('contact/{category}', function ($category) {
	return 'Hello from '.$category.' contact';
});

Route::get('contact/verified/{category}', function ($category) {
	return "Hello from {$category} contact";
});