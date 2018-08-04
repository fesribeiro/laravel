<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    	echo "<a href='/produtos'>Iniciar</a>";
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/inserirProdutos', 'ProdutoController@inserir');

