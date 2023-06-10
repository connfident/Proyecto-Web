@extends('layouts.base')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div>
                <h1 class="text-white">
                    <center>
                        <hr>
                        Profesores para revision
                        <hr>
                    </center>
                </h1>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered table-striped table-hover text-white" style="background-color: #00BFFF;">
                <tr class="text-secondary">

                    <th><center>RUT</center></th>
                    <th><center>DOCUMENTO</center></th>
                    <th><center>FECHA</center></th>
                    <th><center>COMENTARIO</center></th>
                    <th><center>DESCARGAR ARCHIVO</center></th>
                </tr>

                @foreach($estudiante -> propuesta as $index =>$propuesta)
                <tr class="text-black">
                    <td><center>{{$propuesta->estudiante_rut}}</center></td>
                    <td><center>{{$propuesta->documento}}</center></td>
                    <td><center>{{$propuesta->fecha}}</center></td>
                    <td>
                        <center>
                            <a href="{{route('profesores.comentario')}}" class="btn btn-warning">Añadir Comentario</a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="{{ asset($propuesta->documento) }}" class="btn btn-primary" download>Descargar Propuesta</a>
                        </center>
                    </td>
                </tr>        
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection