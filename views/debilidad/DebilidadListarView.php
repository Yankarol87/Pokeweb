<?php
require_once __DIR__ . '/../../usecase/debilidad/DebilidadController.php';
$listaDebilidad = array();
$debilidadController = new DebilidadController();
$debilidadobj = $debilidadController->ListarDebilidad();
if($debilidadobj->status == "ok"){
$listaDebilidad = $debilidadobj->body;
}
?>

<body>
    <h3> Lista de debilidades de pokemon</h3>
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
        foreach($listaDebilidad as $debilidad) {
        ?>
        <tr>
            <td class="align-middle text-center"><?php echo $debilidad ["DebilidadId"]; ?></td>
            <td class="align-middle text-center"><?php echo $debilidad ['Nombre']; ?></td>
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