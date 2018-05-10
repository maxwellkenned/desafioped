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
    return view('welcome');
});
Route::get('/clientes', function(){
    $clientes = [
        ['id' => 1, 'nome' =>"João Silva", 'cgc' =>"15176505770", 'tel' =>"3232-3232", 'email' =>"email.123@email.com"],
        ['id' => 2, 'nome' =>"Pedro Costa", 'cgc' =>"16104598701", 'tel' =>"2222-2222", 'email' =>"email.111@email.com"],
        ['id' => 3, 'nome' =>"Ana Santos", 'cgc' =>"06407810370", 'tel' =>"3333-3333", 'email' =>"email.222@email.com"],
        ['id' => 4, 'nome' =>"Maria Souza", 'cgc' =>"01236589610", 'tel' =>"4444-4444", 'email' =>"email.333@email.com"]
    ];
    Log::debug(array($clientes));
    return view('clientes/index', ['clientes'=> $clientes]);
});
