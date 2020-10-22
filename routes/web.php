<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    echo('ola mundo');
});

Route::get('/', function () {
    echo('<h2>Ola mundo </h2>');
});

Route::get('bem-vindo/aedah', function(){
   echo('<h1>Ola</h2>'); 
});

Route::get('/nome/{nome}', function($nome){
   echo('<h1>Ola '.$nome.'</h1>');
});

Route::get('/nome/{nome}/{aplido}', function($nome,$aplido){
    echo('<h1>Ola '.$nome.' '.$aplido.'</h1>');
});

Route::get('/nomes/{nome}/{numero}', function($nome,$numero){
    $n=is_numeric($numero) ? $numero : 5;
   for($i=1;$i<=$n;$i++)
   {
       echo($nome);
       echo('<br>');
   }
});

Route::get('/bemvindo', function(){
    return view('bemvindo');
});

Route::get('nome2/{nome}/{sobrenome}', function($name=null,$sername=null){
    return view('mostranome', ['name'=>$name, 'sername'=>$sername]);
});


Route::get('/tarefas', function(){
    $tarefas=[
        'Comprar senha',
        'Imprimir fotocopias',
        'Carregar cartão',
        'Ir as compras'
    ];
    return view('tarefas', [
        'tarefas' => $tarefas
    ]);
});

Route::get('/entrada', 'App\Http\Controllers\PortalController@index')->name('equipas.index');

Route::get('/equipas', 'App\Http\Controllers\PortalController@listarEquipas')->name('equipas.lista');

Route::get('/equipas/{chave?}', 'App\Http\Controllers\PortalController@listarEquipa');

Route::get('/equipas/{casa}/{fora}', 'App\Http\Controllers\PortalController@jogo');

Route::get('/contacto', 'App\Http\Controllers\PortalController@mostrarForm')->name('contacto.index');

Route::post('/processar', 'App\Http\Controllers\PortalController@processarForm')->name('processar.form');
