@extends('layouts.base')

@section('content')

<style>

  body{
      background-color:rgb(11, 25, 25);
    }
</style>
    
    <div class="container mt-5 text-white">
        <h2 style="margin-top: 70px;">
        <center>
            Vista de Propuesta
        </center>
        </h2>
        <hr>

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card text-center bg-black">
                <div class="text-white card-body d-flex flex-column">
                <h3 class="card-header">Ingresa tu  Propuesta</h3>
                <hr>
                <form action="{{route('propuestas.store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                    <label>RUT</label>
                    <input type="text" class="form-control" name="rut" value="{{ $rut }}" required readonly>
                    </div>
                    <div class="mb-3">

                        <label for="documento" class="form-label">Ingrese Archivo</label>
                        <input class="form-control" type="file" id="documento" name="documento">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Propuesta</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        <hr>
    </div>
@endsection