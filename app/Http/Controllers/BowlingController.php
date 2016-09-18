<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Bowling;

use Illuminate\Support\Facades\Input;

class BowlingController extends Controller
{
    

	public function index() {

		return view('bowling.index');

	}


	public function addGame() {

		$input = Input::all();
		$name = strtolower($input['name']);
		$score = $input['score'];

		$newGame = new Bowling;
		$newGame->user = $name;
		$newGame->score = $score;
		$newGame->save();

		return view('bowling.index');

	}

	public function show($id) {

		$game = Bowling::find($id);

		return view('bowling.show', compact('game'));

	}


	public function showAll($user) {

		// $allGames = Bowling::where('user', $user)->get();

		$allGames = DB::table('bowling')->where('user', $user)->get();

		return view('bowling.showAll', compact('allGames'));

	}


}
