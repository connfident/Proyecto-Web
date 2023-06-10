@extends('layouts.base')

@section('content')

<style>

  body{
    background-color:rgb(11, 25, 25);
  }
</style>
    
  <div class="container mt-5 text-white">
    <h1 style="margin-top: 70px;">
      <center>
        Añadir Comentario
      </center>
    </h1>
    <hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card text-center bg-black">
            <div class="text-white card-body d-flex flex-column">
              <form action="{{route('profesoress.store')}}" method='POST'>
                @csrf
                <div class="mb-3">
                  <label for="profesor_rut" class="form-label">RUT DEL PROFESOR</label>
                  <input type="text" class="form-control" id="profesor_rut" name='profesor_rut'>
                </div>
                <div class="mb-3">
                  <label for="comentario" class="form-label">COMENTARIO</label>
                  <textarea class="form-control" id="comentario" name='comentario' rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">INGRESAR COMENTARIO</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
@endsection