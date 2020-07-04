<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloCliente;
use App\Helpers\TreatValues; // Important

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = ModeloCliente::all();
        return view('modelos.index')->with(['clientes' => $modelos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $request['registro'] = preg_replace( '/[^0-9]/', '', $request->registro);
        
        error_log($request->registro);    

        ModeloCliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelos = ModeloCliente::find($id);
        $modelos['registro'] = TreatValues::mascarar('000.000.000/00', $modelos['registro']);
        return view('modelos.show')->with(['clientes' => $modelos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelos = ModeloCliente::find($id);
        return view('modelos.edit')->with(['clientes' => $modelos]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modelos = ModeloCliente::find($id)->update($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelos = ModeloCliente::find($id)->delete();
        return redirect()->route('clientes.index');
    }
}
