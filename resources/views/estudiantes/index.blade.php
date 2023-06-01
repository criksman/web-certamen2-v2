@extends('templates.master')

@section('main-content')
<div class="card">
    <div class="card-body">
        <h3>Alumnos</h3>
            <table class="table table-secondary table-striped border border-primary ">
            <thead>
                <tr>
                <th scope="col">RUT</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                <tr>
                <th scope="row">{{ $estudiante->rut }}</th>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellido }}</td>
                <td> <a class="btn btn-success" href="{{ route('estudiantes.index-propuestas', $estudiante->rut ) }}">Ingresar</a> </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
@endsection