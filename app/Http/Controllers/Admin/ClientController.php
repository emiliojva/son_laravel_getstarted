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
use Illuminate\Http\Request;

class ClientController   extends Controller
{

    public function create()
    {
        return view('tcc.cliente.create');
    }
    public function retrieve()
    {
        $clients = Client::all('*');
        return view('tcc.cliente.retrieve', compact(['clients']));
    }
    public function update(){}
    public function delete(){}
    public function save(Request $request)
    {

        $client = new Client(); //        $client->forceFill($request->post('data'));

        if(isset($request->data['id']))
            $client->id = $request->data['id'];

        $client->name = $request->data['name'];
        $client->email = $request->data['email'];
        $client->save();

        return redirect()->to('/admin/clientes');
    }

}