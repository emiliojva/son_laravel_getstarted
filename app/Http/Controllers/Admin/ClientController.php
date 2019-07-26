<?php
/**
 * Created by PhpStorm.
 * User: Berguerians
 * Date: 7/26/2019
 * Time: 5:25 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController   extends Controller
{

    public function create(){}
    public function retrieve()
    {
        $clients = Client::all('*');
        return view('tcc.cliente.retrieve', compact(['clients']));
    }
    public function update(){}
    public function delete(){}

}