@extends('layouts.base')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        Propuestas de Estudiantes
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
                    <th><center>PROPUESTAS</center></th>
                </tr>
                @foreach($estudiantes as $estudiante)
                <tr class="text-black">
                    <td><center>{{$estudiante->rut}}</center></td>
                    <td><center>{{$estudiante->nombre}}</center></td>
                    <td><center>{{$estudiante->apellido}}</center></td>
                    <td><center>{{$estudiante->email}}</center></td>
                    <td>
                        <center>
                            <a href="{{route('ad.mostrar', $estudiante->rut)}}" class="btn btn-warning">Revisar la propuesta</a>
                        </center>
                    </td>
                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection