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

Route::get('/cliente',function(){
    return "Hello World";
});


Route::get('/cliente/{name}/{age}',function($name,$age){
    
    $urlRouteCurrent = route('helloWorld',[$name,$age]);

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
->where(['name'=>'[a-z]+', 'age'=>'[0-9]+'])
->name('helloWorld');


/**
 * CoC Convention over Configuration
 */