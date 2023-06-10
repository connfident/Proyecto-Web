@extends('layouts.base')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        Revision de Propuestas
                        <hr>
                    </center>
                </h1>
            </div>
        </div>

        <div class="col-12 mt-4">
            <table class="table table-bordered table-striped table-hover bg-danger text-white">
                <tr class="text-secondary">

                    <th><center>RUT</center></th>
                    <th><center>NOMBRE</center></th>
                    <th><center>APELLIDO</center></th>
                    <th><center>ESTUDIANTES</center></th>
                </tr>
                @foreach($profesores as $profesor)
                <tr class="text-black">
                    <td><center>{{$profesor->rut}}</center></td>
                    <td><center>{{$profesor->nombre}}</center></td>
                    <td><center>{{$profesor->apellido}}</center></td>
                    <td>
                        <center>
                            <a href="{{route('profesores.estudiantes_propuestas')}}" class="btn btn-warning">Ver Propuestas</a>
                        </center>
                    </td>
                </tr>        
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
