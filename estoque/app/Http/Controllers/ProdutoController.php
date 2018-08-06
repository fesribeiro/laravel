<?php



namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

Class ProdutoController extends Controller{



		public function lista(){

			$produtos = Produto::all();

		
			//                       ou with->('produtos', $produtos);
			return view('produto.listagem')->with('produtos',$produtos);

		}
						// recebe ID por URL
		public function mostra($id){
			// existe tambem o input('Dados do usuario'), route('Rotas')
			//$id = Request::route('id');

			$produto = Produto::find($id);

			if (empty($produto)){

				return "Produto não existente !";

			}

			return view('produto.detalhes')->with('p', $produto);

		}

		public function remove(){
			// existe tambem o input('Dados do usuario'), route('Rotas')
			$id = Request::route('id');
			$produto = Produto::find($id);
			$produto->delete();
			return redirect()->action('ProdutoController@lista');


		}

		public function novo(){


			return view('produto.formulario');



		}

		public function adiciona(){

			/*
			// pegar dog formulario
	
			// cravar no banco

			// Pegar todos os parametros enviados do formulario
			$params = Request::all();

			// Colocar os parametros no construtor da variavel $produto
			$produto = new Produto($params);

			$produto->save();
	
			*/

			// Criando um produto com todos os parametros da request
			Produto::create(Request::all());
			return redirect('/produtos')->withInput();


		}


}