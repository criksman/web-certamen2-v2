@extends('templates.master')

@section('main-content')

<div class="card my-5">
    <div class="card-body">
        <h3>PROFESORES</h3>
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
                @foreach($profesores as $profesor)
                <tr>
                <th scope="row">{{ $profesor->rut }}</th>
                <td>{{ $profesor->nombre }}</td>
                <td>{{ $profesor->apellido }}</td>
                <td> <a class="btn btn-success" href="{{ route('profesores.show-estudiantes', $profesor->rut) }}">Ingresar</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row mb-3">
            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
            </div>

            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                <a class="btn btn-primary fw-bold" style="background-color: #003379" href="{{ route('home.index') }}">Volver atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection