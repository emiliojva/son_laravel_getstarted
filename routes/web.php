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
 * Aula 9
 * Blade - estruturas condicionais e de repetição
 * for-if
 *
 */

Route::get('aula9/blade', function () {

    $value = 10;

    $myArray = [
        'chave1' => 'valor1',
        'chave2' => 'valor2',
        'chave3' => 'valor3',
    ];

    return view('aula9.getstarted-blade', compact(['value','myArray']));

});

/**
 * Aula 10
 *
 * Artisan Commands
 * php artisan route:list
 * php artisan make:controller ClientsController
 *
 */

//

/**
 * Aula 11
 *
 * Criando controllers
 *
 */

/**
 * Convenções e Termos
 * CoC Convention over Configuration
 * MVC - Model View Controller
 * StudlyCaps - Formato
 * php artisan make:controller ClientsController
 */
Route::get('aula11/controller/cliente/cadastrar','ClientController@cadastrar');



/**
 * Aula 12
 *
 * Route Groups
 *
 * Criar controllers dentro de subdiretorios do App\Http\Controllers\Admin;
 * php artisan make:controller Admin\Controller
 *
 */

Route::group(['prefix'=>'/aula12/cliente'],function(){
   Route::get('cadastrar','ClientController@cadastrar');
   Route::get('excluir','ClientController@cadastrar');
   Route::get('alterar','ClientController@cadastrar');
   Route::get('editar','ClientController@cadastrar');
});



/**
 * Aula 13
 *
 * dot envs (.env)
 *
 * only developments enviromments (DANGEROUS IN PRODUCTION)
 *
 * note: need enabling in variables_order and add "E = > envs ou environments", in php.ini
 * staying "EGPCS" => ENV / GET / POST / COOKIE / ENV / SERVER
 */

Route::group(['prefix'=>'/aula13'],function(){
    Route::get('env',function(){
        dump( env('nome') ); // helper's laravel
        dump( getenv('nome') ); // native's function php
        dump($_ENV); // Super Variable Global $_ENV // native PHP
    });
});