<?php
    require_once __DIR__ . '/../router/Enrutador.php'
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?cargar=PokemonListarView">Pokemon</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorias
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?cargar=TipoAddView">Registrar Tipos</a></li>
                    <li><a class="dropdown-item" href="?cargar=TipoListarView">Ver Tipos </a></li>
                    <li><a class="dropdown-item" href="?cargar=DebilidadAddView">Debilidades </a></li>
                    <li><a class="dropdown-item" href="?cargar=DebilidadListarView">Ver Debilidades </a></li>
                    <li><a class="dropdown-item" href="?cargar=PokemonAddView">Pokemon </a></li>
                    <li><a class="dropdown-item" href="?cargar=PokemonListarView">Ver Pokemon </a></li>
                    <li><a class="dropdown-item" href="?cargar=EvolucionAddView">Evolucion</a></li>
                    <li><a class="dropdown-item" href="?cargar=EvolucionListarView">Ver Evolucion </a></li>
                    <li><a class="dropdown-item" href="?cargar=PokemondebilidadAddView">Pokemon debilidad</a></li>
                    <li><a class="dropdown-item" href="?cargar=PokemondebilidadListarView">Ver Pokemon debilidades</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Y algo mas</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-disabled="true">Acerca de</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <section>
        <?php
        $enrutador = new Enrutador();
        if(isset($_GET['cargar']))
            if($enrutador->validarGET($_GET['cargar'])){
                 $enrutador->cargarVista($_GET['cargar']);  
            }
        ?>
    </section>

    </body>
</html>