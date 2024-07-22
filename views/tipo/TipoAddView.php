<?php
require_once __DIR__ . '/../../usecase/tipo/TipoController.php';

$tipoController = new TipoController(); 

if (isset($_POST['enviar'])) {
    $tipoObj = new TipoIn($_POST['tipo']);
    $result = $tipoController->InsertarTipo($tipoObj);
    
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
    <h3>Registrar tipo de pokemon</h3>
    <form action=""method="post">
        <div class="mb-3">
            <label for="nombreTipo"
                class="form-label">
                Nombre:
                </label>
                <input
                type="text"
                class="form-control"
                name="tipo"
                aria-describedby="tipoHelp">
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