<?php

namespace Imprenta\Http\Controllers;

use Illuminate\Http\Request;
use Imprenta\Http\Requests;
use Imprenta\SucursalModel;
use Imprenta\ClienteModel;
use Imprenta\EstadoModel;
use Imprenta\TipoClienteModel;
use Session;
use Redirect;
use Imprenta\Http\Controllers\Controller;

class VentasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $fp = array("Formas de Pago" => '–Forma de Pago–', "1" => 'Contado', "2" => 'Tarjeta Debito/Credito', "3" => 'Deposito Bancario');
        $tipocliente = array("0" => '–Tipo Cliente–') + TipoClienteModel::lists('tipoCliente', 'tipoClienteId')->toArray();
        $estado = array("Estados" => '–Estados–') + EstadoModel::lists('Estado', 'EstadoId')->toArray();
        $clientes = ClienteModel::Name($request->name)->get();
        $sucursal = array("0" => '–Sucursal–') + SucursalModel::lists('sucursal', 'sucursalId')->toArray();
        $acabados = array("Acabados"=>"-Acabados-","Bolsas"=>'Bolsas',"Vulcanizado"=>'Vulcanizado',"Espacio P/Tensar"=>'Espacio P/Tensar','Sin Acabados'=>'Sin Acabados');
        return view('ventas.index', compact('clientes', 'fp', 'estado', 'tipocliente', 'sucursal','acabados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
