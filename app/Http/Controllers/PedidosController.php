<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos=Pedido::all();
        return view("pedidos.index",compact("pedidos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pedidos.create");
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
        $pedido=new Pedido;
        $pedido->Estatus=$request->Estatus;
        $pedido->id_cliente=$request->id_cliente;
        $pedido->id_vendedor=$request->id_vendedor;
        $pedido->Fecha_pedido=$request->Fecha_pedido;
        $pedido->Fecha_envio=$request->Fecha_envio;
        $pedido->save();
        return redirect("/pedidos");
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
        $pedido=Pedido::findOrFail($id);
        return view ("pedidos.show", compact("pedido"));
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
        $pedido=Pedido::findOrFail($id);
        return view ("pedidos.edit", compact("pedido"));
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
        //
        $pedido=Pedido::findOrFail($id);
        $pedido->update($request->all());
        return redirect("/pedidos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedido::destroy($id);
        return redirect("/pedidos");
    }
}
