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
        Ingresar Estudiantes
      </center>
    </h2>
    <hr>
   

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card text-center bg-black">
            <div class="text-white card-body d-flex flex-column">
              <h3 class="card-header">Ingresar Alumno</h3>
              <hr>
              
              <form action="{{route('estudiantes.store')}}" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="rut" class="form-label">RUT:</label>
                  <input type="text" class="form-control"  name="rut" required>
                </div>
                <div class="mb-3">
                  <label for="nombre" class="form-label">NOMBRE:</label>
                  <input type="text" class="form-control"  name="nombre" required>
                </div>
                <div class="mb-3">
                  <label for="apellido" class="form-label">APELLIDO:</label>
                  <input type="text" class="form-control"  name="apellido" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">EMAIL:</label>
                  <input type="email" class="form-control"  name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar alumno</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

@endsection