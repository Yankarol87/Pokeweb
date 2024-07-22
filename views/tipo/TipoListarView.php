<?php
require_once __DIR__ . '/../../usecase/tipo/TipoController.php';
$listaTipos = array();
$tipoController = new TipoController();
$tiposobj = $tipoController->ListarTipos();
if($tiposobj->status == "ok"){
$listaTipos = $tiposobj->body;
}
?>

<body>
    <h3> Lista de tipos de pokemon</h3>
    <table class="table table-bordered"> 
    <thead class ="">
        <tr scope="col">
            <td> ID </td>
            <td> Nombre </td>
            <td> Acciones </td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($listaTipos as $tipo) {
        ?>
        <tr>
            <td class="align-middle text-center"><?php echo $tipo ["TipoId"]; ?></td>
            <td class="align-middle text-center"><?php echo $tipo ['Nombre']; ?></td>
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