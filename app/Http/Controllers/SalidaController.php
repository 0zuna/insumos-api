<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Salida;

class SalidaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return response()->json($request->user()->salidas()->get());
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
	$salida= new Salida();
	$salida->codigo=$request->codigo;
	$salida->cantidad=$request->cantidad;
	$salida->user_id=$request->user()->id;
	$salida->producto_id=$producto->id;
	$salida->save();
	return response()->json(['producto'=>$producto,'salida'=>$salida], 201);

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
    public function update(Request $request, Salida $salida)
    {
        //
	$salida->codigo=$request->codigo;
	$salida->cantidad=$request->cantidad;
	$salida->update();
        return response()->json($salida, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida  $salida)
    {
        //
	$salida->delete();
        return response()->json(null, 204);
    }
}
