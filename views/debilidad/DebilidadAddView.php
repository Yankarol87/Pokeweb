<?php
require_once __DIR__ . '/../../usecase/debilidad/DebilidadController.php';

$debilidadController = new DebilidadController(); 

if (isset($_POST['enviar'])) {
    $debilidadObj = new DebilidadIn($_POST['debilidad']);
    $result = $debilidadController->InsertarDebilidad($debilidadObj);
    
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
    <h3>Registrar debilidades de pokemon</h3>
    <form action=""method="post">
        <div class="mb-3">
            <label for="nombreDebilidad"
                class="form-label">
                Nombre:
                </label>
                <input
                type="text"
                class="form-control"
                name="debilidad"
                aria-describedby="debilidadHelp">
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