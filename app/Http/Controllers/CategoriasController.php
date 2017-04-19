<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use exception;
class CategoriasController extends Controller
{
	public function index(){
		$categorias = Categoria::All();
		return view('categorias.index',['categorias' => $categorias]);
	}

	public function create(request $request){
		try{
			Categoria::create($request->all());
		}
		catch(exception $e)
		{}
		return redirect()->route('categorias.visualizar');
	}

	public function delete(Categoria $categoria){
		$categoria->delete();
		return redirect()->route('categorias.visualizar');
	}

	public function edit(Categoria $categoria){
		$categorias = Categoria::All();
		return view('categorias.index',['categorias' => $categorias,'categoriaEdit'=>$categoria] );
	}

	public function save(request $request){
		try{
			$categoria = Categoria::find($request->all()['id']);
			$categoria->fill($request->all());
			$categoria->save();

		}
		catch(exception $e)
		{}
		return redirect()->route('categorias.visualizar');
	}

}
