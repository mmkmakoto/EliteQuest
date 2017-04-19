<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questao;
use App\Models\Categoria;
use exception;
class QuestoesController extends Controller
{
	public function index()
	{
		$questoes = Questao::with('categoria')->get();
		$categorias = Categoria::all();
		return view('questoes.index',['questoes'=>$questoes,'categorias'=>$categorias]);
	}

	public function create(request $request){
		try{
			$fillable = $request->all();
			if(!is_bool($fillable['status']))
			{
				$fillable['status'] = true;
			}
			Questao::create($fillable);
		}
		catch(exception $e)
		{}
		return redirect()->route('questoes.visualizar');
	}

	public function delete(Questao $questao){
		$questao->delete();
		return redirect()->route('questoes.visualizar');
	}

	public function edit(Questao $questao){
		$questoes = Questao::with('categoria')->get();
		$categorias = Categoria::all();
		return view('questoes.index',['questoes'=>$questoes,'categorias'=>$categorias,'questaoEdit'=>$questao]);
	}

	public function save(request $request){
		try{
			$fillable = $request->all();
			if(!is_bool($fillable['status']))
			{
				$fillable['status'] = true;
			}
			$questao = Questao::find($request->all()['id']);
			$questao->fill($fillable);
			$questao->save();
		}
		catch(exception $e)
		{}
		return redirect()->route('questoes.visualizar');
	}
}
