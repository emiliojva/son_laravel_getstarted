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
use Illuminate\Database\Eloquent\Model;
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
    public function update(int $id){

        /**
         * @global $cliente Model
         */
        $cliente = Client::find($id);

        if(!$cliente){
            abort(404);
        }

        return view('tcc.cliente.update', compact(['cliente']));

    }
    public function delete($id)
    {

        /**
         * @global $cliente Model
         */
        $cliente = Client::find($id);

        if(!$cliente){
            abort(404);
        }

        $cliente->delete();

        return redirect()->to('/admin/clientes');

    }
    public function save(Request $request)
    {
        if(isset($request->data['id'])){
            $client = Client::find($request->data['id']);
            if(!$client){
                abort(404);
            }
        } else {
            $client = new Client(); //        $client->forceFill($request->post('data'));
        }

        $client->name = $request->data['name'];
        $client->email = $request->data['email'];
        $client->save();

        return redirect()->to('/admin/clientes');
    }

}