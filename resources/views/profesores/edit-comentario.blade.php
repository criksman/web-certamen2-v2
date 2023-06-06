@extends('templates.master')

@section('main-content')

<div class="card my-3" style="background-color: #353B3C">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('profesores.update-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">
                    @method('put')
                    @csrf
                    
                    @php   
                        $pivot = $profesor->propuestasConPivot()->where('propuesta_id', $propuesta->id)->first()->pivot;
                    @endphp
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3" placeholder={{ $pivot->comentario }}></textarea>
                    </div> 
                    <button type="submit" class="btn btn-primary fw-bold" style="background-color: #003389">Confirmar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection