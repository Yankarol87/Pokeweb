<?php
require_once __DIR__ . '/../../usecase/pokemon/PokemonController.php';
$listaPokemon = array();
$pokemonController = new PokemonController();
$pokemonobj = $pokemonController->ListarPokemon();
if($pokemonobj->status == "ok"){
$listaPokemon = $pokemonobj->body;
}
else{
    echo "error eee";
}
?>

<body>
    <h3> Lista de pokemon</h3>
    <table class="table table-bordered"> 
    <thead class ="">
        <tr scope="col">
            <td> PokemonId </td>
            <td> Nombre </td>
            <td> Tipo </td>
            <td> Descripcion </td>
            <td> Acciones </td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($listaPokemon as $pokemon) {
        ?>
        <tr>
            <td class="align-middle text-center"><?php echo $pokemon ["PokemonId"]; ?></td>
            <td class="align-middle text-center"><?php echo $pokemon ["poke"]; ?></td>
            <td class="align-middle text-center"><?php echo $pokemon ["Tipo"]; ?></td>
            <td class="align-middle text-center"><?php echo $pokemon ["Descripcion"]; ?></td>
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