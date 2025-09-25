<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EJEMPLO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="container mt-2">

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

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre*" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos*" required>
                    </div>

                    <div class="col-md-12 mb-3 w-50">
                        <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="Codigo Postal*" required>
                        <span class="text-body-tertiary">Ejemplo: 12345</span>
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle*" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="numeroExterior" name="numeroExterior" placeholder="Número Exterior*" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="numeroInterior" name="numeroInterior" placeholder="Número Interior*" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="informacionAdicional" name="informacionAdicional" placeholder="Informacion Adicional*" required>
                        <span class="text-body-tertiary">Ejemplo: Entre la calle o informacion adicional</span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia*" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="delegacionoMunicipio" name="delegacionoMunicipio" placeholder="Delegacion o Municipio*" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad*"required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <select class="form-select fs-6" aria-label="Estado">
                        <option selected>Estado<span class="text-danger">*</span>
                        <option value="1">Verayork</option>
                        <option value="2">coatzacharcos</option>
                        <option value="3">Tampuerco</option>
                        </select>
                    </div>





                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-3 mt-auto">
            <p class="mb-0">© 2025 Mi Proyecto - Todos los derechos reservados</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>