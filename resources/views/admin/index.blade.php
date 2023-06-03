@extends('templates.master')

@section('main-content')

<div class="container min-vh-100">
  <div class="row">
    <div class="col-6 py-5 d-flex flex-column justify-content-center align-items-center">
      <a class="btn btn-primary justify-content-center" href="{{ route('admin.index-profesores') }}">Ver profesores</a>
    </div>
    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
      <a class="btn btn-primary justify-content-center" href="{{ route('admin.index-estudiantes') }}">Ver alumnos</a>
    </div>
  </div>
</div>

@endsection