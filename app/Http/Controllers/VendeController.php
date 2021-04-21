<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vende;

class VendeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendes=Vende::all();
        return view("vendes.index",compact("vendes"));
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
        return view("vendes.create");
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
        $vende=new Vende;
        $vende->Nombre=$request->Nombre;
        $vende->Apellido_Paterno=$request->Apellido_Paterno;
        $vende->Apellido_Materno=$request->Apellido_Materno;
        $vende->save();
        return redirect("/vendes");
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
        $vende=Vende::findOrFail($id);
        return view ("vendes.show", compact("vende"));
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
        $vende=Vende::findOrFail($id);
        return view ("vendes.edit", compact("vende"));
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
        $vende=Vende::findOrFail($id);
        $vende->update($request->all());
        return redirect("/vendes");
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
        Vende::destroy($id);
        return redirect("/vendes");
    }
}
