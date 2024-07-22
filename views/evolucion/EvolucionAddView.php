<?php
require_once __DIR__ . '/../../usecase/evolucion/EvolucionController.php';

$evolucionController = new EvolucionController(); 

if (isset($_POST['enviar'])) {
    $evolucionObj = new EvolucionIn($_POST['evolucion'], $_POST['pokemonId'] );
    
    $result = $evolucionController->InsertarEvolucion($evolucionObj);
    
    if ($result->status == "ok") {
        echo "<div class='alert alert-success' role='alert'>
        Registro exitoso
        </div>"; 
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        Error al registrar
        </div>";
    }
}
?>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
<p></p>
<div>
    <h3>Registrar las evoluciones de pokemon</h3>
    <form action=""method="post">
        <div class="mb-3">
            <label for="nombreEvolucion"
                class="form-label">
                Nombre:
                </label>
                <input
                type="text"
                class="form-control"
                name="evolucion"
                aria-describedby="evolucionHelp">
        </div>
        <div class="mb-3">
            <label for="nombreEvolucion"
                class="form-label">
                PokemonId:
                </label>
                <input
                type="text"
                class="form-control"
                name="evolucion"
                aria-describedby="evolucionHelp">
        </div>
        <button
            type="submit"
            class="btn btn-primary"
            name="enviar"
            value="Crear">
            Registrar
        </button>
    </form>
</div>
</body