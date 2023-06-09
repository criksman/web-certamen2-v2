@extends('templates.master')

@section('main-content')
<div class="card my-3"  style="margin-top: 50px">
  <div class="card-body">
      <h3 class="mb-4">Lista de alumnos</h3>
      <table class="table table-secondary table-striped border border-primary ">
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
      
    

    <div class="row">
      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <a class="btn btn-primary" style="background-color: #003379" href="{{ route('admin.create-estudiantes') }}">Ingresar alumno</a>
      </div>

      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <a class="btn btn-primary" style="background-color: #003379" href="{{ route('admin.index') }}">Volver atrás</a>
      </div>
    </div>
  </div>
</div>
@endsection