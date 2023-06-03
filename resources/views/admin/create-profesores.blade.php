@extends('templates.master')

@section('main-content')

<div class="row">
  <div class="card col-9 border border-primary bg-secondary">
    <div class="col d-flex flex-column">
      <div class="card-body ">
        <h1 class="mb-3 card-title d-flex justify-content-center">Ingrese aqui sus datos profesor</h1>
          <form method="POST" action="{{ route('admin.store-profesores') }}">
            @csrf
            <div class="row d-flex justify-content-center">
              <div class="mb-3 col-9">
                <label for="rut_profesor" class="form-label fw-bold">RUT</label>
                <input type="text" class="form-control" id="rut_profesor" name="rut" placeholder="Ingrese su rut sin puntos y con guion">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="mb-3 col-9">
                <label for="nombre_profesor" class="form-label fw-bold">NOMBRE</label>
                <input type="text" class="form-control" id="nombre_profesor" name="nombre" placeholder="Ingrese su nombre">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="mb-3 col-9">
                  <label for="apellido_profesor" class="form-label fw-bold">APELLIDO</label>
                  <input type="text" class="form-control" id="apellido_profesor" name="apellido" placeholder="Ingrese su apellido">
                </div>
            </div>
              <div class="row">
                  <div class="col-6 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary fw-bold">Enviar datos</button>
                  </div>
                  <div class="col-6 d-flex justify-content-center">
                      <a class="btn btn-primary fw-bold" href="{{ route('admin.index-profesores') }}">Volver atrás</a>
                  </div>
              </div>
          </form>
        </div>
    </div>
  </div>
</div>

@endsection