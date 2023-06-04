@extends('templates.master')


@section('main-content')
<div class="row">
    <div class="col">
        <div class="col my-3">
            <h2>Ingresado como profesor: {{ $profesor->nombre }} {{ $profesor->apellido }}<h2></span>
        </div>
        
        <div class="col my-5">
            <h4>Propuestas del alumno: {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>
        </div>
        
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
            
            @php
                $pivot = $propuesta->profesores()->wherePivot('profesor_rut', $profesor->rut)->first();
            @endphp
            
            <tr>
            <th scope="row"> <a href="{{ route('profesores.download-propuesta', [$profesor->rut , $estudiante->rut, $propuesta->id]) }}"> {{ $propuesta->documento }} </a> </th>
            <td>{{ $propuesta->fecha }}</td>
            <td> @if($propuesta->estado == 0) Esperando revisión @elseif($propuesta->estado == 1) Modificar propuesta @elseif($propuesta->estado == 2) Rechazado @elseif($propuesta->estado == 3) Aceptado @endif </td>
            <td> 
                @if ($pivot)
                    <form method="POST" action="{{ route('profesores.destroy-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn btn-success">Borrar comentario</button>
                    </form>

                    <a class="btn btn-success" href="{{ route('profesores.edit-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">Editar comentario</a>
                @else 
                    <a class="btn btn-success" href="{{ route('profesores.create-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">Comentar</a>
                @endif
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12 d-flex flex-column align-items-end justify-content-center">
        <a class="btn btn-primary" style="background-color: #003379" href="{{ route('profesores.show-estudiantes', $profesor->rut) }}">Volver atrás</a>
    </div>
</div>
@endsection