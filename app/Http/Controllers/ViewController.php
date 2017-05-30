<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

	public function viewHome()
	{
		return view('dashboard.index');
	}

	public function viewDashboard()
	{
		dump(Auth::user());
		return view('dashboard.index');
	}

}