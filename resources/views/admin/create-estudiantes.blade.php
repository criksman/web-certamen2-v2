@extends('templates.master')

@section('main-content')

<div class="row">
  <div class="col py-5 d-flex flex-column justify-content-center align-items-center">
      <h1 class="mb-5">Ingresar alumno</h1>
      <form method="POST" action="{{ route('admin.store-estudiantes') }}">
          @csrf
          <div class="mb-3">
            <label for="rut_alumno" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_alumno" name="rut">
          </div>
          <div class="mb-3">
            <label for="nombre_alumno" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_alumno" name="nombre">
          </div>
          <div class="mb-3">
              <label for="apellido_alumno" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido_alumno" name="apellido">
          </div>
          <div class="mb-3">
            <label for="email_alumno" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email_alumno" name="email">
          </div>
          <div class="row">
              <div class="col-6">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <div class="col-6">
                  <a class="btn btn-primary" href="{{ route('admin.index-estudiantes') }}">Volver atrás</a>
              </div>
          </div>
      </form>
  </div>
</div>

@endsection