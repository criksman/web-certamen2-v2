@extends('templates.master')


@section('main-content')
<div class="card">
    <div class="card-body bg-secondary">
        <div class="row">
            <div class="col">
                <div class="col my-3">
                    <h2>Ingresado como profesor: {{ $profesor->nombre }} {{ $profesor->apellido }}<h2></span>
                    <hr>
                </div>
                
                <div class="col my-4">
                    <h4>Propuestas del alumno: {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>
                </div>
                
                <table class="table table-secondary table-striped border border-primary ">
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
                    <th scope="row">{{ $propuesta->documento }}</th>
                    <td>{{ $propuesta->fecha }}</td>
                    <td> @if($propuesta->estado == 0) Aprobado @elseif($propuesta->estado == 1) En revisión @elseif($propuesta->estado == 2) Rechazado @endif </td>
                    <td> 
                        @if ($pivot)
                            <form method="POST" action="{{ route('profesores.destroy-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn btn-success my-2">Borrar comentario</button>
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
                <a class="btn btn-primary" href="{{ route('profesores.show-estudiantes', $profesor->rut) }}">Volver atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection