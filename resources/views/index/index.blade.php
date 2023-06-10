@extends('layouts.base')

@section('content')

<body>
    
    <!-- Agregarle vida a la pagina -->
    <style>

        body {
            background-color:rgb(39, 40, 40);
        }

        .fondo {
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center;
          flex-direction: column;
          height: 100vh;
          background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/fondo.jpg);
        }

        .asignatura{
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        .propuestas{
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

    </style>

    
   

    <!-- Presentacion de la pagina -->
    <div id="fondo" class="fondo">
        <h1>Taller de sistemas de Informacion</h1>
    </div>

    <!-- Explicacion de la asignatura -->
    <div style="background-color: rgb(0, 0, 0); padding: 20px;">
        <div id="asignatura" class="asignatura">
          <div class="text-white tittle text-center">
            <h1>Asignatura</h1>
          </div>
      
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-auto">
                <img src="{{ asset('images/asignatura.jpg')}}" class="img-fluid rounded" alt="Imagen">
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-center h-100">
                  <p class="text-white mt-2 mt-md-0" style="text-align: justify; line-height: 1.5;">
                    En informática, los sistemas de información ayudan a administrar, recolectar, recuperar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización. La importancia de un sistema de información radica en la eficiencia en la correlación de una gran cantidad de datos ingresados a través de procesos diseñados para cada área con el objetivo de producir información válida para la posterior toma de decisiones. Un sistema de información se destaca por su diseño, facilidad de uso, flexibilidad, mantenimiento automático de los registros, apoyo en toma de decisiones críticas y mantener el anonimato en informaciones irrelevantes.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div style="background-color: rgb(27, 28, 37); padding: 20px;">
        <div class="propuestas">
  
          <div id="propuestas" class="text-white tittle text-center">
            <h1>Propuesta De Proyecto</h1>
            <hr>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card text-center bg-black">
                  <div class="text-white card-body d-flex flex-column">
                    <h3 class="card-header">Ingresar Propuesta</h3>
                    <img src="{{ asset('images/revisar.jpg')}}" class="img-fluid">
                    <div class="mt-auto">
                      <a class="btn btn-primary" href="{{route('propuestas.index_propuestas')}}" role="button" style="margin-top: 20px; font-size: 18px;">Ingresar</a>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col-md-6">
                <div class="card text-center bg-black">
                  <div class="text-white card-body d-flex flex-column">
                    <h3 class="card-header">Revisar mi Propuesta</h3>
                    <img src="{{ asset('images/propuesta.jpg')}}" class="img-fluid">
                    <div class="mt-auto">
                      <a class="btn btn-primary" href="#" role="button" style="margin-top: 20px; font-size: 18px;">Ingresar</a>
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