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
      </div>
    </div>

  </div>
</div>
@endsection