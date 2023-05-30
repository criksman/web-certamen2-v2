@extends('templates.master')

@section('main-content')

<div class="row">
    <div class="col my-3">
        <h2>Ingresado como profesor: {{ $profesor->nombre }} {{ $profesor->apellido }}<h2></span>
    </div>
</div>

<div class="row">
  <div class="col py-5">
    <p><h4>Lista de alumnos</h4></p>
    
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
          <td> <a class="btn btn-success" href="#">Ver propuestas</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection