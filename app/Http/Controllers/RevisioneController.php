<?php

namespace App\Http\Controllers;

use App\Models\Revisione;
use Illuminate\Http\Request;

class RevisioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($rut)
    {
        $revisiones = Revisione::all();
        return view('propuestas.estudiante_propuesta', ['rut' => $rut]);
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
    public function store(Request $request)
    {
        $revisiones = new Revisione();
        $revisiones -> propuesta_id = $request->id;
        $revisiones -> profesor_rut = $request->rut;
        $revisiones -> date = Carbon::now('America/Santiago');
        $revisiones -> time = Carbon::now('America/Santiago');
        $revisiones->comentario = $request->input('comentario');
        $revisiones -> save();
        return redirect()->route('propuestas.index_propuestas');
    }
}
