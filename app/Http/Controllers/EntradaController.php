<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Entrada;

class EntradaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return response()->json($request->user()->entradas()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
	$producto=Producto::where('codigo',$request->codigo)->first();
	$entrada= new Entrada();
	$entrada->codigo=$request->codigo;
	$entrada->cantidad=$request->cantidad;
	$entrada->ref_factura=$request->ref_factura;
	$entrada->user_id=$request->user()->id;
	$entrada->producto_id=$producto->id;
	$entrada->save();
	return response()->json(['producto'=>$producto,'entrada'=>$entrada], 201);

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
	$entrada->codigo=$request->codigo;
	$entrada->cantidad=$request->cantidad;
	$entrada->ref_factura=$request->ref_factura;
	$entrada->update();
        return response()->json($entrada, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {
        //
	$entrada->delete();
        return response()->json(null, 204);
    }
}
