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
| docs: https://laravel.com/docs/5.5/routing
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return "Hello World";
});


/**
 *  Aula 4 - Rotas amigáveis
 */
Route::get('/cliente/{name}/{age}', function ($name, $age) {

    $urlRouteCurrent = route('helloWorld', [$name, $age]);

    /**
     * HereDocs
     * https://www.php.net/manual/pt_BR/language.types.string.php
     */
    $template = <<<HTML
Hello World {$name}, of the  {$age} ages.
Current Route: {$urlRouteCurrent}
HTML;

    return $template;
})
    ->where(['name' => '[a-z]+', 'age' => '[0-9]+'])
    ->name('helloWorld');

/**
 * Aula 5
 * Rotas amigáveis POST e formulários. Formulario de Post com CSRF - Cross Site Request Forgery
 */
Route::get('/aula5/cliente/formulario', function () {
    return view('aula5.cliente.formulario');

});
Route::post('/aula5/cliente/cadastrar', function (\Illuminate\Http\Request $request) {
    echo $request->get('name');
});


/**
 * Aula 6
 * View - Criando Views e Passando Paramentros.
 */
Route::get('/aula6/cliente/cadastrar', function () {

    $nomes = ['Giovana', 'Mateus', 'Rosi', 'Emilio'];

    $sobrenomes = ['Vieira', 'Galdino', 'Amaral', 'Oliveira'];

    // embaralhar sobrenomes
    shuffle($sobrenomes);

    return view('aula6.cliente.cadastrar', compact(['nomes', 'sobrenomes']));

    // Ou
    return view('aula6.cliente.cadastrar')
        ->with('nomes', $nomes)
        ->with('sobrenomes', $sobrenomes);

});

/**
 * Aula 7
 * Iniciando com Blade
 * O Parse do .blade é transformado em <?php na pasta /storage/framework/views
 *
 */

Route::get('aula7/blade', function () {

    $nome = "Teste";
    $variavel1 = 10;
    return view('aula7.getstarted-blade', compact(['nome', 'variavel1']));

});


/**
 * Aula 8
 * Mais detalhes sobre a interpolação do Blade
 *
 */

Route::get('aula8/blade', function () {

    $nome = "Teste";
    $variavel1 = 10;
    return view('aula8.getstarted-blade', compact(['nome', 'variavel1']));

});

/**
 * CoC Convention over Configuration
 */