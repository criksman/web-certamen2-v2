@extends('templates.master')

@section('main-content')
<div class="card my-3">
  <div class="card-body">
    <div class="row">
      <div class="col">
          <form method="POST" action="{{ route('admin.update-propuesta', [$estudiante->rut, $propuesta->id]) }}">
            @method('put')
            @csrf
            <label class="form-label" for="estado_alumno"><h2>Estado actual del proyecto: @if($propuesta->estado == 0) Esperando revisión @elseif($propuesta->estado == 1) Modificar propuesta @elseif($propuesta->estado == 2) Rechazado @elseif($propuesta->estado == 3) Aceptado @endif</h2></label>
            <select id="estado_alumno" name="estado" class="form-control border border-primary">
              <option value = "0" @if($propuesta->estado == 0) selected @endif>Esperando Revisión</option>
              <option value = "1" @if($propuesta->estado == 1) selected @endif>Modificar propuesta</option>
              <option value = "2" @if($propuesta->estado == 2) selected @endif>Rechazado</option>
              <option value = "3" @if($propuesta->estado == 3) selected @endif>Aceptado</option>
            </select>
            <div class="row my-3">
              <div class="col-6 d-flex flex-column align-items-start justify-content-center">
                <button type="submit"  style="background-color: #003379" class="btn btn-primary">Aceptar</button>
              </div>

              <div class="col-6 d-flex flex-column align-items-end justify-content-center">
                <a class="btn btn-primary"  style="background-color: #003379" href="{{ route('admin.show-propuestas', $estudiante->rut) }}">Volver atrás</a>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection