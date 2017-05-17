<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Questao;

class ModelAccessController extends Controller
{
	public function all($model){
		$modelsNamespace = 'App\\Models\\'.$model;
		$models = null;
		if(class_exists($modelsNamespace)){
			$models = $modelsNamespace::all();
		}
		return response()->json($models);
	}

	public function categorias(){
		$categorias = Categoria::all();
		return response()->json($categorias);
	}

	public function questoes(){
		$questoes = Questao::all();
		return response()->json($questoes);
	}
}