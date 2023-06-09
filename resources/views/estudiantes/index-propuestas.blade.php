@extends('templates.master')

@section('main-content')
<div class="row">
    <div class="col-md-9 my-3 mx-auto">
        <div class="card mb-2"style="background-color: #003389">
            <div class="card-body">
                <h1 class="card-title text-white">Propuestas de Proyecto de: {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>
            </div>
        </div>

        <div class="card mb-2">
            <div class="card-body">
                <h3 class="card-title mb-3 ">Ingresar Propuesta</h3>
                <form method="POST" action="{{ route('estudiantes.store-propuesta', $estudiante->rut) }}" class="col-md-10" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="documento" class="form-label">Archivo</label>
                        <input type="file" id="documento" name="documento" class="form-control" accept=".pdf,.doc,.docx,.txt" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #003379">Enviar Propuesta</button>
                </form>
            </div>
        </div>

        <div class="card mb-2">  
            <div class="card-body">
              <h2 class="card-title mb-4">Propuestas</h2>
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
                    <th scope="row"> <a href="{{ route('estudiantes.download-propuesta', [$estudiante->rut, $propuesta->id]) }}"> {{ $propuesta->documento }} </a> </th>
                    <td> {{ $propuesta->fecha }} </td>
                    <td> @if($propuesta->estado == 0) Esperando revisión @elseif($propuesta->estado == 1) Modificar propuesta @elseif($propuesta->estado == 2) Rechazado @elseif($propuesta->estado == 3) Aceptado @endif </td>
                    <td> <a class="btn btn-success" href="{{ route('estudiantes.show-comentarios', [$estudiante->rut, $propuesta->id]) }}">Ver comentarios</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row mb-3">
                <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                </div>

                <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                  <a class="btn btn-primary fw-bold" style="background-color: #003379" href="{{ route('estudiantes.index') }}">Volver atrás</a>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection