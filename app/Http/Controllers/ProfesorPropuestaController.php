<?php

namespace App\Http\Controllers;

use App\Models\ProfesorPropuesta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfesorPropuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profesores.comentario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProfesorPropuesta $profesor_propuesta)
    {
        
        $profesor_propuesta=new ProfesorPropuesta();
        $profesor_propuesta->profesor_rut = $request->input('profesor_rut');
        $profesor_propuesta->comentario = $request->input('comentario');
        $profesor_propuesta->fecha= Carbon::now('America/Santiago');
        $profesor_propuesta->hora = Carbon::now('America/Santiago')->format('H:i:s');
        
        $profesor_propuesta->save();
        return redirect()->route("index.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfesorPropuesta $profesorPropuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfesorPropuesta $profesorPropuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfesorPropuesta $profesorPropuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfesorPropuesta $profesorPropuesta)
    {
        //
    }
}
