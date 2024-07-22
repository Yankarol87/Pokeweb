<?php
require_once __DIR__ . '/../../usecase/evolucion/EvolucionController.php';
$listaEvolucion = array();
$evolucionController = new EvolucionController();
$evolucionobj = $evolucionController->ListarEvolucion();
if($evolucionobj->status == "ok"){
$listaEvolucion = $evolucionobj->body;
}
?>

<body>
    <h3> Lista de evoluciones</h3>
    <table class="table table-bordered"> 
    <thead class ="">
        <tr scope="col">
            <td> EvolucionId </td>
            <td> Pokemon </td>
            <td> Evolucion </td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($listaEvolucion as $evolucion) {
        ?>
        <tr>
            <td class="align-middle text-center"><?php echo $evolucion ["EvolucionId"]; ?></td>
            <td class="align-middle text-center"><?php echo $evolucion ['Nombre']; ?></td>
            <td class="align-middle text-center"><?php echo $evolucion ["PokemonId"]; ?></td>
            
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