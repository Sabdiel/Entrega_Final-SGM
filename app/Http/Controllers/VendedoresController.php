<?php

namespace App\Http\Controllers;

use App\Models\vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendedores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedores.create');
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
     * @param  \App\Models\vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function show(vendedores $vendedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function edit(vendedores $vendedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendedores $vendedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendedores $vendedores)
    {
        //
    }
}
