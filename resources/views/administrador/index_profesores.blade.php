@extends('layouts.base')

@section('content')

<div class="container mt-5">
    <div class="row">
    
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        LISTA DE PROFESORES 
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
                </tr>
                @foreach($profesores as $profesore)
                <tr class="text-black">
                    <td><center>{{$profesore -> rut}}</center></td>
                    <td><center>{{$profesore -> nombre}}</center></td>
                    <td><center>{{$profesore -> apellido}}</center></td>
                </tr>
                @endforeach
            </table>
            <div>
                <a href="{{route('administrador.create_profesores')}}" class="btn btn-primary">INGRESAR PROFESORES</a>
            </div>
        </div>
    </div>
</div>

@endsection
