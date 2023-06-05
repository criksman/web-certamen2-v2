@extends('templates.master')

@section('main-content')

<div class="row">
    <div class="col">
        <div class="card mb-2 my-3">  
            <div class="card-body">
            <h2 class="card-title mb-3">Comentarios</h2>
                <table class="table table-secondary table-striped border border-primary">
                <thead>
                    <tr>
                    <th scope="col">Profesor</th>
                    <th scope="col">Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propuesta->profesores as $profesor)
                        @php   
                        $pivot = $profesor->propuestasConPivot()->where('propuesta_id', $propuesta->id)->first()->pivot;
                        @endphp
                        <tr>
                            <th scope="row">{{ $profesor->nombre }} {{ $profesor->apellido }}</th>
                            <td> {{$pivot->comentario}} </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>

@endsection