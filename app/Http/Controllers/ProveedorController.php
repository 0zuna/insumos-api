<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return response()->json($request->user()->proveedors()->get());
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
	$proveedor=new Proveedor();
	$proveedor->nombre=$request->nombre;
	$proveedor->domicilio=$request->domicilio;
	$proveedor->telefono=$request->telefono;
	$proveedor->email=$request->email;
	$proveedor->forma_pago=$request->forma_pago;
	$proveedor->user_id=$request->user()->id;
	$proveedor->save();
	return response()->json($proveedor, 201);

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
    public function update(Request $request, Proveedor $proveedor)
    {
        //
	$proveedor->nombre=$request->nombre;
	$proveedor->domicilio=$request->domicilio;
	$proveedor->telefono=$request->telefono;
	$proveedor->email=$request->email;
	$proveedor->forma_pago=$request->forma_pago;
	$proveedor->user_id=$request->user()->id;
	$proveedor->update();
        return response()->json($proveedor, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
	$proveedor->delete();
        return response()->json(null, 204);
    }
}
