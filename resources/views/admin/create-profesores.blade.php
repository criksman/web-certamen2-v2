@extends('templates.master')

@section('main-content')

<div class="container"style="margin-top: 50px">
  <div class="row justify-content-center">
    <div class="col-lg-8 py-5">
      <div class="card mb-2" style="background-color: #003389">
        <div class="card-body d-flex justify-content-center">
          <h1 class="mb-3 card-title text-center"style="color: white;padding: 10px;">Ingrese aquí sus datos profesor</h1>
        </div>
      </div>

      <div class="card border-primary">
        <div class="card-body">
          <form method="POST" action="{{ route('admin.store-profesores') }}">
            @csrf
            <div class="row justify-content-center">
              <div class="mb-3 col-9">
                <label for="rut_profesor" class="form-label fw-bold">RUT</label>
                <input type="text" class="form-control border-dark" id="rut_profesor" name="rut" placeholder="Ingrese su rut sin puntos y con guion">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="mb-3 col-9">
                <label for="nombre_profesor" class="form-label fw-bold">NOMBRE</label>
                <input type="text" class="form-control border-dark" id="nombre_profesor" name="nombre" placeholder="Ingrese su nombre">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="mb-3 col-9">
                <label for="apellido_profesor" class="form-label fw-bold">APELLIDO</label>
                <input type="text" class="form-control border-dark" id="apellido_profesor" name="apellido" placeholder="Ingrese su apellido">
              </div>
            </div>
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary fw-bold" style="background-color: #003379">Enviar datos</button>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <a class="btn btn-primary fw-bold" style="background-color: #003379" href="{{ route('admin.index-profesores') }}">Volver atrás</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection