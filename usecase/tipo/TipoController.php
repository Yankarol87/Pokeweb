<?php
require_once __DIR__ . '/TipoUseCase.php';
require_once __DIR__ . '/TipoGateway.php';
require_once __DIR__ . '/../../Dto/TipoIn.php';
class TipoController {
    public function InsertarTipo(TipoIn $tipoObj){
        $tipoGateway = new TipoGateway();
        $useCase = new TipoUseCase ($tipoGateway);
        $result = $useCase->Insertar ($tipoObj);
        return $result;
    }
public function ListarTipos(){
    $tipoGateway = new TipoGateway();
    $useCase = new TipoUseCase ($tipoGateway);
    $result = $useCase->Listar();
    return $result;
}
}
