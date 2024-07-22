<?php
require_once __DIR__ . '/../../usecase/pokemondebilidad/PokemondebilidadController.php';

$pokemondebilidadController = new PokemondebilidadController(); 

if (isset($_POST['enviar'])) {
    $pokemondebilidadObj = new PokemondebilidadIn($_POST['pokemondebilidadId'],$_POST['pokemonId'], $_POST['debilidadId'] );
    
    $result = $pokemondebilidadController->InsertarPokemondebilidad($pokemondebilidadObj);
    
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
    <h3>Registrar los pokemon y sus debilidades</h3>
    <form action=""method="post">
    <div class="mb-3">
            <label for="nombrePokemondebilidad"
                class="form-label">
                PokemondebilidadId:
                </label>
                <input
                type="text"
                class="form-control"
                name="pokemondebilidad"
                aria-describedby="pokemondebilidadHelp">
        </div>
        <div class="mb-3">
            <label for="nombrePokemondebilidad"
                class="form-label">
                PokemonId:
                </label>
                <input
                type="text"
                class="form-control"
                name="pokemondebilidad"
                aria-describedby="pokemondebilidadHelp">
        </div>
        <div class="mb-3">
            <label for="nombrePokemondebilidad"
                class="form-label">
                DebilidadId:
                </label>
                <input
                type="text"
                class="form-control"
                name="pokemondebilidad"
                aria-describedby="pokemondebilidadHelp">
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