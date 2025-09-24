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


    <div class="container my-5">
        <div class="row">
            <div class="col text-center">
                {{-- <h1>Bienvenido</h1>
                <p class="lead">Este es un layout base con Bootstrap 5.</p>
                <button class="btn btn-primary">Acción</button> --}}

                {{-- AQUI EMPIEZA A HACER UN DISEÑO CON LOS COMPONENTES DE BOOSTRAP --}}
                {{-- LINK DE ABAJO PARA SACAR COMPONENTES --}}
                {{-- https://getbootstrap.com/docs/5.3/getting-started/introduction/ --}}

               <h4 class="mb-4 fw-bold">INFORMACIÓN DE ENTREGA</h4>

                <div class="row mb-3">
    <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre *</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="col-md-6">
        <label for="apellidos" class="form-label">Apellidos *</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
    </div>
    <div class="col-md-6">
        <label for="codigo.postal" class="form-label">codigo postal *</label>
        <input type="text" class="form-control" id="codigo.postal" name="codigo.postal" required>
     </div>
      <div class="col-md-6">
        <label for="calle" class="form-label">calle *</label>
        <input type="text" class="form-control" id="calle" name="calle" required>
    </div>
        <div class="col-md-6">
        <label for="numero.exterior" class="form-label">numero exterior *</label>
        <input type="text" class="form-control" id="numero.exterior" name="numero.exterior" required>
    </div>
        <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre *</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
        </form>
</div>


    </div>
</div>



                <!-------------------------------- FIN ------------------------------------->
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