<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
// 	$people = ['Taylor', 'Bob', 'Jeffrey'];
//     return view('welcome', compact('people'));
// });



//Route::get('/', 'PagesController@home');

Route::get('/', 'PagesController@about');

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::get('movies', 'MovieController@index');
Route::post('movies', 'MovieController@addMovie');


Route::get('bowling', 'BowlingController@index');
Route::post('bowling', 'BowlingController@addGame');
Route::get('bowling/{game}', 'BowlingController@show');
Route::get('bowling/all/{name}', 'BowlingController@showAll');