<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function viewIndex()
	{
		return view('index.index');
	}

	public function viewPartida()
	{
		return view('partida.index');
	}
}