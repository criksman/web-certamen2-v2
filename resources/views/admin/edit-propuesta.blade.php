<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Ingresar alumno</title>
</head>
<body class="bg-light">
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Certamen Nº2</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="estudiante_index.html">Estudiantes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="profesores_index.html">Profesores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administradores_index.html">Administradores</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col py-5">
                <form method="POST" action="{{ route('admin.update-propuesta', [$estudiante->rut, $propuesta->id]) }}">
                  @method('put')
                  @csrf
                  <label class="form-label" for="estado_alumno"><h1>Estado actual del proyecto: @if($propuesta->estado == 0) Esperando revisión @elseif($propuesta->estado == 1) Modificar propuesta @elseif($propuesta->estado == 2) Rechazado @elseif($propuesta->estado == 3) Aceptado @endif</h1></label>
                  <select id="estado_alumno" name="estado" class="form-control">
                    <option value = "0" @if($propuesta->estado == 0) selected @endif>Esperando Revisión</option>
                    <option value = "1" @if($propuesta->estado == 1) selected @endif>Modificar propuesta</option>
                    <option value = "2" @if($propuesta->estado == 2) selected @endif>Rechazado</option>
                    <option value = "2" @if($propuesta->estado == 3) selected @endif>Aceptado</option>
                  </select>
                  <div class="row">
                    <div class="col-6 py-5 d-flex flex-column align-items-start justify-content-center">
                      <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>

                    <div class="col-6 d-flex flex-column align-items-end justify-content-center">
                      <a class="btn btn-primary" href="{{ route('admin.show-propuestas', $estudiante->rut) }}">Volver atrás</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>