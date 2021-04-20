<?php

namespace App\Http\Controllers;

use App\Models\detalle;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detalles.index');
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalle.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(detalle $detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle $detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalle $detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle $detalle)
    {
        //
    }
}
