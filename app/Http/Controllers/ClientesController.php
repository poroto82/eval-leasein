<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Inertia\Inertia;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function clientes(){
        $clientes = Cliente::all();

        $rta = [];

        foreach($clientes as $c){
            $aux = new \stdClass();
            $aux = $c;
            $aux->tipoTamanio = $c->tipoTamanio()->first();
            $aux->tipoSector = $c->tipoSector()->first();
            $rta[] = $aux;
        }
        
        return Inertia::render("Home", [
            'clientes'=>$rta
        ]);
    }

    public function clientesById($id){

        $cliente = Cliente::find($id);
        
        $rta = new \StdClass();
        $rta->cliente = $cliente;
        $rta->cliente->tipoTamanio = $cliente->tipoTamanio()->first();
        $rta->cliente->tipoSector = $cliente->tipoSector()->first();

        $rta->equipos = [];

        foreach($cliente->equipos()->get() as $e){
            $auxEquipo = new \StdClass();
            $auxEquipo = $e;
            $auxEquipo->tipoProcesador = $e->tipoProcesador()->first();
            $auxEquipo->tipoMarca = $e->tipoMarca()->first();
            $auxEquipo->tipoEquipo = $e->tipoEquipo()->first();
            
            $rta->equipos[] = $auxEquipo;
        }

        return Inertia::render("Clientes", [
            'cliente'=>$rta
        ]);
    }

}
