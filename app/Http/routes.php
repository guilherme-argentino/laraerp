<?php

/*
 * Models
 */
Route::model('cliente', 'Laraerp\Cliente');
Route::model('venda', 'Laraerp\Venda');

Route::group(['middleware' => ['auth']], function() {

    /*
     * Pessoa
     */
    Route::post('pessoa/receitaParams', ['as' => 'pessoa.receitaParams', 'uses' => '\Laraerp\Http\Controllers\PessoaController@receitaParams']);
    Route::post('pessoa/receitaConsulta', ['as' => 'pessoa.receitaConsulta', 'uses' => '\Laraerp\Http\Controllers\PessoaController@receitaConsulta']);

    /*
     * Cliente
     */
    Route::get('cliente', ['as' => 'cliente.index', 'uses' => '\Laraerp\Http\Controllers\ClienteController@index']);
    Route::get('cliente/form', ['as' => 'cliente.form', 'uses' => '\Laraerp\Http\Controllers\ClienteController@form']);
    Route::post('cliente/cadastrar', ['as' => 'cliente.cadastrar', 'uses' => '\Laraerp\Http\Controllers\ClienteController@cadastrar']);
    Route::get('cliente/ver/{cliente}', ['as' => 'cliente.ver', 'uses' => '\Laraerp\Http\Controllers\ClienteController@ver']);
    Route::post('cliente/editar/{cliente}', ['as' => 'cliente.editar', 'uses' => '\Laraerp\Http\Controllers\ClienteController@editar']);
    Route::get('cliente/deletar/{cliente}', ['as' => 'cliente.deletar', 'uses' => '\Laraerp\Http\Controllers\ClienteController@deletar']);

    /*
     * Produto
     */
    Route::get('produto', ['as' => 'produto.index', 'uses' => '\Laraerp\Http\Controllers\ProdutoController@index']);


    /*
     * Venda
     */
    Route::get('venda', ['as' => 'venda.index', 'uses' => '\Laraerp\Http\Controllers\VendaController@index']);
    Route::get('venda/form', ['as' => 'venda.form', 'uses' => '\Laraerp\Http\Controllers\VendaController@form']);
    Route::get('venda/cadastrar/{cliente}', ['as' => 'venda.cadastrar', 'uses' => '\Laraerp\Http\Controllers\VendaController@cadastrar']);
    Route::get('venda/ver/{venda}', ['as' => 'venda.ver', 'uses' => '\Laraerp\Http\Controllers\VendaController@ver']);
    Route::get('venda/deletar/{venda}', ['as' => 'venda.deletar', 'uses' => '\Laraerp\Http\Controllers\VendaController@deletar']);

    /*
     * Venda Item
     */
    Route::get('vendaItem/adicionar/{venda}', ['as' => 'vendaItem.form', 'uses' => '\Laraerp\Http\Controllers\VendaItemController@form']);
    Route::post('vendaItem/adicionar/{venda}', ['as' => 'vendaItem.adicionar', 'uses' => '\Laraerp\Http\Controllers\VendaItemController@adicionar']);

    /*
     * Tags
     */
    Route::post('tag/adicionar', ['as' => 'tag.adicionar', 'uses' => '\Laraerp\Http\Controllers\TagController@adicionar']);
    Route::post('tag/remover', ['as' => 'tag.remover', 'uses' => '\Laraerp\Http\Controllers\TagController@remover']);

    /*
     * Dashboard
     */
    Route::get('/', '\Laraerp\Http\Controllers\DashboardController@index');
});


