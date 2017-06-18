<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sala;
use exception;
class SalasController extends Controller
{
	public function all(){

		$salas = ['teste','sala'];
		return response()->json($salas);
	}

	public function create($user){

		
	}
}
