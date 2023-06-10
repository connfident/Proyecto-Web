@extends('layouts.base')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        LISTA DE ESTUDIANTES
                        <hr>
                    </center>
                </h1>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered table-striped table-hover text-white" style="background-color: #00BFFF;">
                <tr class="text-secondary">
                    <th><center>RUT</center></th>
                    <th><center>NOMBRE</th>
                    <th><center>APELLIDO</th>
                    <th><center>EMAIL</th>
                    <th><center>ESTADO DE PROPUESTA</th>
                </tr>
                @foreach($estudiantes as $estudiante)
                <tr class="text-black">
                    <td><center>{{$estudiante->rut}}</center></td>
                    <td><center>{{$estudiante->nombre}}</center></td>
                    <td><center>{{$estudiante->apellido}}</center></td>
                    <td><center>{{$estudiante->email}}</center></td>
                    <td>
                        <center>
                            <select name="estado_propuesta" onchange="cambiarEstadoPropuesta(this.value, '{{$estudiante->rut}}')">
                                <option value="0">No ha ingresado propuesta</option>
                                <option value="1">Esperando Revisión</option>
                                <option value="2">Modificar Propuesta</option>
                                <option value="3">Rechazado</option>
                                <option value="4">Aceptado</option>
                            </select>
                        </center>   
                    </td>
                </tr>
                @endforeach
                
            </table>
            {{$estudiantes->links()}}
            <div>
                <a href="{{route('administrador.create_estudiantes')}}" class="btn btn-primary">INGRESAR ALUMNOS</a>
            </div>
        </div>
    </div>
</div>

@endsection