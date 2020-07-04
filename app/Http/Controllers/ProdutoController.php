<?php

namespace App\Http\Controllers;

use App\Models\ModeloProduto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    //PARA CRIAR php artisan make:controller ProdutoController -r

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = ModeloProduto::all();
        return view('produtos.index')->with(['produtos' => $modelos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModeloProduto::create($request->all());
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelos = ModeloProduto::find($id);
        return view('produtos.edit')->with(['produtos' => $modelos]);   
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
        $modelos = ModeloProduto::find($id)->update($request->all());
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelos = ModeloProduto::find($id)->delete();
        return redirect()->route('produtos.index');
    }
}
