<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MovieController extends Controller
{
    

	public function index() {

		return view('movies.index');

	}


	public function addMovie() {

		// return view('movies.index');
		return 'something';
	}


}
