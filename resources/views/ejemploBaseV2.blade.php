<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EJEMPLO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        @csrf
    </head>
    <body class="container mt-2">

        <div class="loadable d-none position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-light" role="status"></div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mi Proyecto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Acerca</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->

        <div class="container p-2">
            <div>
                <h4 class="fw-bold">INFORMACIÓN DE ENTREGA</h4>
                <div class="alert alert-danger error-validacion d-none"></div>
                <form id="form_usuario" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>

                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                        </div>

                        <div class="col-6 mb-3">
                            <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
                        </div>

                        <div class="col-6 mb-3">
                            <select class="form-select fs-6" id="estado" name="estado" aria-label="Estado">
                            <option selected disabled="on">Estado</option>
                            <option value="1">Verayork</option>
                            <option value="2">coatzacharcos</option>
                            <option value="3">Tampuerco</option>
                            </select>
                        </div>

                        <div class="col-12 text-center">
                            <button type="button" id="btnGuardar" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-3 mt-auto">
            <p class="mb-0">© 2025 Mi Proyecto - Todos los derechos reservados</p>
        </footer>

        <script src="{{ asset('plugins/jquery-3.6.1/jquery-3.6.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="{{ asset('js/home.js') }}"></script>
    </body>
</html>