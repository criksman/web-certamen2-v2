@extends('templates.master')

@section('main-content')

<div class="container min-vh-100" style="margin-top: 250px">
  <div class="row">
    <div class="col-6 py-5 d-flex flex-column justify-content-center align-items-center">
      <a class="btn btn-primary justify-content-center" style="padding: 30px 50px; font-size: 25px;background-color: #003379" href="{{ route('admin.index-profesores') }}">Ver profesores</a>
    </div>
    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
      <a class="btn btn-primary justify-content-center" style="padding: 30px 50px; font-size: 25px ;background-color: #003389" href="{{ route('admin.index-estudiantes') }}">Ver alumnos</a>
    </div>
  </div>
</div>

@endsection