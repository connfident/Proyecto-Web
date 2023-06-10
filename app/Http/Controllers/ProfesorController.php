<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::latest() -> get();
        return view("administrador.index_profesores", ["profesores" => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("administrador.create_profesores");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Profesor::create($request -> all());
        return redirect() -> route("administrador.index_profesores");
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesore)
    {
        //
    }

    public function MostrarProfesores(){
        $profesores = Profesor::all();
        return view('profesores.index_profesor',compact('profesores'));
    }
}
