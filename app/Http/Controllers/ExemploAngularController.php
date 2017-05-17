<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExemploAngularController extends Controller
{
	public function index(){
		
		return view('exemplo_angular.index');
	}
}