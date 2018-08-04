<?php



namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

Class ProdutoController extends Controller{



		public function lista(){

			$produtos = DB::select('SELECT * FROM produtos');

		
			//                       ou with->('produtos', $produtos);
			return view('listagem')->with('produtos',$produtos);

		}

		public function mostra(){
			// existe tambem o input('Dados do usuario'), route('Rotas')
			$id = Request::input('id', '0');

			$produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

			if (empty($produto)){

				return "Produto não existente !";

			}

			return view('detalhes')->with('p', $produto[0]);

		}

		public function inserir(){

				$nome = Request::input('nomeProduto');


			return view('inserir')->with('nome', $nome );



		}


}