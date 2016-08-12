<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
	$people = ['Taylor', 'Bob', 'Jeffrey'];
    return view('welcome', compact('people'));
});


Route::get('/about', function() {
	return view('pages.about');
});