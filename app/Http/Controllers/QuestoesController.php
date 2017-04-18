<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questao;
class QuestoesController extends Controller
{
	public function index()
	{
		$questoes = Questao::all();
		return view('questoes.index',['questoes'=>$questoes]);
	}

	public function create(request $request){
		Questao::create($request->all());
		return redirect()->route('questoes.visualizar');
	}

	public function delete(Questao $questao){
		$questao->delete();
		return redirect()->route('questoes.visualizar');
	}

	public function edit(Questao $questao){
		$questoes = Questao::all();
		return view('questoes.index',['questoes'=>$questoes,'questaoEdit'=>$questao]);
	}

	public function save(request $request){
		$questao = Questao::find($request->all()['id']);
		$questao->fill($request->all());
		$questao->save();
		return redirect()->route('questoes.visualizar');
	}
}
