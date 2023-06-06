@extends('templates.master')

@section('main-content')

<div class="card my-3">
  <div class="card-body">
  
    <div class="row">
        <div class="col my-2">
            <h2>Ingresado como profesor: {{ $profesor->nombre }} {{ $profesor->apellido }}<h2></span>
        </div>
    </div>

    <div class="row">
      <div class="col py">
        <p><h4>Lista de alumnos</h4></p>
        
        <table class="table table-secondary table-striped border border-primary">
          <thead>
            <tr>
              <th scope="col">Rut</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">E-mail</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
              <th scope="row">{{ $estudiante->rut }}</th>
              <td>{{ $estudiante->nombre }}</td>
              <td>{{ $estudiante->apellido }}</td>
              <td>{{ $estudiante->email }}</td>
              <td> <a class="btn btn-success" href="{{ route('profesores.show-propuestas', [$profesor->rut , $estudiante->rut]) }}">Ver propuestas</a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row mb-3">
          <div class="col-6 d-flex flex-column align-items-center justify-content-center">
          </div>

          <div class="col-6 d-flex flex-column align-items-center justify-content-center">
            <a class="btn btn-primary fw-bold" style="background-color: #003379" href="{{ route('profesores.index') }}">Volver atrás</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection