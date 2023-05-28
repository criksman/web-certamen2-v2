<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Lista de profesores</title>
</head>

<body class="bg-light">
    <div class="container-fluid bg-light">
        <div class="row mb-3">
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

    <div class="container min-vh-100">
      <div class="card">
        <div class="card-body">
          <h3>PROFESORES</h3>
              <table class="table table-secondary table-striped border border-primary ">
                <thead>
                  <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($profesores as $profesor)
                  <tr>
                    <th scope="row">{{ $profesor->rut }}</th>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->apellido }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>

      <div class="row mb-3">
        <div class="col-6 d-flex flex-column align-items-center justify-content-center">
          <a class="btn btn-primary fw-bold" href="{{ route('admin.create-profesores') }}">Ingresar profesor</a>
      </div>

      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <a class="btn btn-primary fw-bold" href="{{ route('admin.index') }}">Volver atrás</a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>