@extends('templates.master')

@section('main-content')

<div class="container"style="margin-top: 30px">
  <div class="row justify-content-center">
    <div class="col-lg-5 py-5">
      <div class="card mb-2" style="background-color: #003389">
        <div class="card-body d-flex justify-content-center">
          <h1 class="mb-5 card-title text-center" style="color: white;padding: 10px;">Ingresar alumno</h1>
        </div>
      </div>

      <div class="card border-primary">
        <div class="card-body">
          <form method="POST" action="{{ route('admin.store-estudiantes') }}">
            @csrf
            <div class="mb-3">
              <label for="rut_alumno" class="form-label">Rut</label>
              <input type="text" class="form-control border-dark" id="rut_alumno" name="rut">
            </div>
            <div class="mb-3">
              <label for="nombre_alumno" class="form-label">Nombre</label>
              <input type="text" class="form-control border-dark" id="nombre_alumno" name="nombre">
            </div>
            <div class="mb-3">
              <label for="apellido_alumno" class="form-label">Apellido</label>
              <input type="text" class="form-control border-dark" id="apellido_alumno" name="apellido">
            </div>
            <div class="mb-3">
              <label for="email_alumno" class="form-label">E-mail</label>
              <input type="email" class="form-control border-dark" id="email_alumno" name="email">
            </div>
            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary" style="background-color: #003379">Submit</button>
              </div>
              <div class="col-6 text-end">
                <a class="btn btn-primary" style="background-color: #003379" href="{{ route('admin.index-estudiantes') }}">Volver atrás</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection