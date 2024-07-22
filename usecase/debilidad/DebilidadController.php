<?php
require_once __DIR__ . '/DebilidadUseCase.php';
require_once __DIR__ . '/DebilidadGateway.php';
require_once __DIR__ . '/../../Dto/DebilidadIn.php';
class DebilidadController {
    public function InsertarDebilidad(DebilidadIn $debilidadObj){
        $debilidadGateway = new DebilidadGateway();
        $useCase = new DebilidadUseCase ($debilidadGateway);
        $result = $useCase->Insertar ($debilidadObj);
        return $result;
    }
public function ListarDebilidad(){
    $debilidadGateway = new DebilidadGateway();
    $useCase = new DebilidadUseCase ($debilidadGateway);
    $result = $useCase->Listar();
    return $result;
}
}
