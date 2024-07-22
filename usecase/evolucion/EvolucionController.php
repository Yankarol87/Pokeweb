<?php
require_once __DIR__ . '/EvolucionUseCase.php';
require_once __DIR__ . '/EvolucionGateway.php';
require_once __DIR__ . '/../../Dto/EvolucionIn.php';
class EvolucionController {
    public function InsertarEvolucion(EvolucionIn $evolucionObj){
        $evolucionGateway = new EvolucionGateway();
        $useCase = new EvolucionUseCase ($evolucionGateway);
        $result = $useCase->Insertar ($evolucionObj);
        return $result;
    }
public function ListarEvolucion(){
    $evolucionGateway = new EvolucionGateway();
    $useCase = new EvolucionUseCase ($evolucionGateway);
    $result = $useCase->Listar();
    return $result;
}
}
