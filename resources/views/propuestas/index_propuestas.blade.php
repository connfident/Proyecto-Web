@extends('layouts.base')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        Ingresar mi Propuestas
                        <hr>
                    </center>
                </h1>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered table-striped table-hover text-white" style="background-color: #00BFFF;">
                <tr class="text-secondary">
                    <th><center>RUT</center></th>
                    <th><center>NOMBRE</center></th>
                    <th><center>APELLIDO</center></th>
                    <th><center>EMAIL</center></th>
                    <th><center>Propuesta</center></th>
                </tr>
                @foreach($estudiantes as $estudiante)
                <tr class="text-black">
                    <td>{{$estudiante->rut}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellido}}</td>
                    <td>{{$estudiante->email}}</td>
                    <td>
                        <center>
                            <a href="{{ route('propuestas.estudiante_propuesta', ['rut' => $estudiante->rut]) }}" class="btn btn-warning">Ingresar Propuesta</a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection