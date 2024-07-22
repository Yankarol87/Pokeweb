<?php
require_once __DIR__ . '/../../usecase/pokemondebilidad/PokemondebilidadController.php';
$listaPokemondebilidad = array();
$pokemondebilidadController = new PokemondebilidadController();
$pokemondebilidadobj = $pokemondebilidadController->ListarPokemondebilidad();
if($pokemondebilidadobj->status == "ok"){
$listaPokemondebilidad = $pokemondebilidadobj->body;
}
?>

<body>
    <h3> Lista de pokemon y sus debilidades</h3>
    <table class="table table-bordered"> 
    <thead class ="">
        <tr scope="col">
            <td> PokemonId </td>
            <td> DebilidadesId </td>
            <td> Acciones </td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($listaPokemondebilidad as $pokemondebilidad) {
        ?>
        <tr>
            <td class="align-middle text-center"><?php echo $pokemondebilidad ["PokemonId"]; ?></td>
            <td class="align-middle text-center"><?php echo $pokemondebilidad ['DebilidadId']; ?></td>
            <td>
            <button
                type="button"
                onclick="window.location.href='?cargar=#' "
                class="btn btn-primary mt-1 mb-2 mr-sm-2 ">
            Editar</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</body>