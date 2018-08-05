<?php



namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

Class ProdutoController extends Controller{



		public function lista(){

			$produtos = DB::select('SELECT * FROM produtos');

		
			//                       ou with->('produtos', $produtos);
			return view('produto.listagem')->with('produtos',$produtos);

		}

		public function mostra(){
			// existe tambem o input('Dados do usuario'), route('Rotas')
			$id = Request::input('id', '0');

			$produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

			if (empty($produto)){

				return "Produto não existente !";

			}

			return view('produto.detalhes')->with('p', $produto[0]);

		}

		public function novo(){


			return view('produto.formulario');



		}

		public function adiciona(){

			// pegar do formulario
			// cravar no banco

			$nome = Request::input('nome');
			$valor = Request::input('valor');
			$descricao = Request::input('descricao');
			$quantidade = Request::input('quantidade');

			DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));


			return redirect('/produtos')->withInput();


		}


}