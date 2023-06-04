@extends('templates.master')

@section('main-content')

<div class="row">
  <div class="col py-5">
    <h1>Propuestas del alumno: {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Documento</th>
          <th scope="col">Fecha</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($propuestas as $propuesta)
        <tr>
          <th scope="row">{{ $propuesta->documento }}</th>
          <td>{{ $propuesta->fecha }}</td>
          <td> @if($propuesta->estado == 0) Esperando revisión @elseif($propuesta->estado == 1) Modificar propuesta @elseif($propuesta->estado == 2) Rechazado @elseif($propuesta->estado == 3) Aceptado @endif </td>
          <td> <a class="btn btn-success" href="{{ route('admin.edit-propuesta', [$estudiante->rut, $propuesta->id])  }}">Cambiar estado</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-12 d-flex flex-column align-items-end justify-content-center">
    <a class="btn btn-primary" style="background-color: #003379" href="{{ route('admin.index-estudiantes') }}">Volver atrás</a>
  </div>
</div>

@endsection