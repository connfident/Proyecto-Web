<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use Carbon\Carbon;

class PropuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($rut)
    {
        $propuesta = Propuesta::all();
        return view('propuestas.estudiante_propuesta', ['rut' => $rut]);
    }

    public function Mostrar(Propuesta $propuestas)
    {
        $propuestas = Propuesta::all();
        return view ('profesores.propuestas', compact('propuestas') );
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
        $propuesta = new Propuesta();
        $propuesta -> estudiante_rut = $request->rut;
        $propuesta -> documento = $request->documento;
        $propuesta -> estado = 0;
        $propuesta -> fecha = Carbon::now('America/Santiago');
        $propuesta -> created_at = Carbon::now('America/Santiago');
        $propuesta -> updated_at = Carbon::now('America/Santiago');
        $propuesta -> save();
        return redirect()->route('propuestas.index_propuestas');
    }
}
