<?php 
namespace cadastro\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;
use cadastro\Cadastro;

Class CadastroController extends Controller{

		public function cadastro(){

				return view('cadastro.cadastro');
		}

		public function lista(){

			$cadastrados = Cadastro::all();

			return view('cadastro.lista')->with('cadastrados', $cadastrados); 

		}

		public function detalhes($id){

			$aluno = Cadastro::find($id);

			return view('cadastro.detalhes')->with('aluno', $aluno);

		}

		public function cadastrar(){


			return view('cadastro.cadastrar');
		}

		public function adicionar(){

	
			Cadastro::create(Request::all());

			return redirect('/')->withInput();;


		}

}		











?>