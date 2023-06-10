<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $estudiantes = Estudiante::latest()->paginate(10);
        return view("administrador.index_estudiantes", ["estudiantes" => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("administrador.create_estudiantes");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Estudiante::create($request->all());
        return redirect()->route("administrador.index_estudiantes");
    }

    public function MostrarEstudiantes(){
        $estudiantes = Estudiante::all();
        return view('propuestas.index_propuestas',compact('estudiantes'));
    }

    public function MostrarEstudiantes2(){
        $estudiantes = Estudiante::all();
        return view('profesores.estudiantes_propuestas',compact('estudiantes'));
    }

    public function Mostrar(Estudiante $estudiante){

        return view ('profesores.propuestas', compact('estudiante') );
    }

}