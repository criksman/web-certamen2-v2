@extends('templates.master')

@section('main-content')

<div class="row">
  <div class="col py-5">
    <h1>Lista de alumnos</h1>
    
    <table class="table">
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
          <td> <a class="btn btn-success" href="{{ route('admin.show-propuestas', $estudiante->rut) }}">Ver propuestas</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-6 d-flex flex-column align-items-start justify-content-center">
    <a class="btn btn-primary" href="{{ route('admin.create-estudiantes') }}">Ingresar alumno</a>
  </div>

  <div class="col-6 d-flex flex-column align-items-end justify-content-center">
    <a class="btn btn-primary" href="{{ route('admin.index') }}">Volver atrás</a>
  </div>
</div>

@endsection