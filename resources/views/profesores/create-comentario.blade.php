@extends('templates.master')

@section('main-content')
<div class="card bg-info my-3">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('profesores.store-comentario', [$profesor->rut, $estudiante->rut, $propuesta->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
                    </div> 
                    <button type="submit" class="btn btn-primary fw-bold ">Enviar comentario</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection