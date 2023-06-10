@extends('layouts.base')

@section('content')

<body>
    
  <style>
    body {
      background-color:rgb(39, 40, 40);
    }

    .admin{
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
    }

    .content {
      margin-top: 100px;
    }

    .card-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }
  </style>

  <div class="content" style="background-color: rgb(0, 0, 0); padding: 20px;">
        

    <div style="background-color: rgb(27, 28, 37); padding: 20px;">
      <div class="propuestas">
      
  
        <div id="admin" class="text-white tittle text-center">
          <hr>
          <h1>ADMINISTRADOR</h1>
          <hr>
        </div>
        



        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card text-center bg-black">
                <div class="text-white card-body d-flex flex-column">
                  <h3 class="card-header">Ingresar Alumnos</h3>
                  <img src="{{ asset('images/admin.alumnos.jpg')}}" class="img-fluid card-img">
                  <div class="mt-auto">
                    <a class="btn btn-primary" href="{{route('administrador.index_estudiantes')}}" role="button" style="margin-top: 20px; font-size: 18px;">Ingresar</a>
                  </div>
                </div>
              </div>
            </div>
      








            <div class="col-md-6">
              <div class="card text-center bg-black">
                <div class="text-white card-body d-flex flex-column">
                  <h3 class="card-header">Ingresar Profesores</h3>
                  <img src="{{ asset('images/admin.profesores.jpg')}}" class="img-fluid card-img">
                  <div class="mt-auto">
                    <a class="btn btn-primary" href="{{route('administrador.index_profesores')}}" role="button" style="margin-top: 20px; font-size: 18px;">Ingresar</a>
                  </div>
              </div>
            </div>

            







          </div>
        </div>
      </div>
    </div>
  </div> 

</body>

@endsection