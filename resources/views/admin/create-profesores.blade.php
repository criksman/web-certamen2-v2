<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Ingresar profesor</title>
</head>
<body class="bg-light">
    <div class="container-fluid bg-light mb-3">
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
          <div class="card col-9 border border-primary bg-secondary">
            <div class="col d-flex flex-column">
              <div class="card-body ">
                <h1 class="mb-3 card-title d-flex justify-content-center">Ingrese aqui sus datos profesor</h1>
                  <form method="POST" action="{{ route('admin.store-profesores') }}">
                    @csrf
                    <div class="row d-flex justify-content-center">
                      <div class="mb-3 col-9">
                        <label for="rut_profesor" class="form-label fw-bold">RUT</label>
                        <input type="text" class="form-control" id="rut_profesor" name="rut" placeholder="Ingrese su rut sin puntos y con guion">
                      </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                      <div class="mb-3 col-9">
                        <label for="nombre_profesor" class="form-label fw-bold">NOMBRE</label>
                        <input type="text" class="form-control" id="nombre_profesor" name="nombre" placeholder="Ingrese su nombre">
                      </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                      <div class="mb-3 col-9">
                          <label for="apellido_profesor" class="form-label fw-bold">APELLIDO</label>
                          <input type="text" class="form-control" id="apellido_profesor" name="apellido" placeholder="Ingrese su apellido">
                        </div>
                    </div>
                      <div class="row">
                          <div class="col-6 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary fw-bold">Enviar datos</button>
                          </div>
                          <div class="col-6 d-flex justify-content-center">
                              <a class="btn btn-primary fw-bold" href="{{ route('admin.index-profesores') }}">Volver atrás</a>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>