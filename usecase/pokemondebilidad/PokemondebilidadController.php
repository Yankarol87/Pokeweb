<?php
require_once __DIR__ . '/PokemondebilidadUseCase.php';
require_once __DIR__ . '/PokemondebilidadGateway.php';
require_once __DIR__ . '/../../Dto/PokemondebilidadIn.php';
class PokemondebilidadController {
    public function InsertarPokemondebilidad(PokemondebilidadIn $pokemondebilidadObj){
        $pokemondebilidadGateway = new PokemondebilidadGateway();
        $useCase = new PokemondebilidadUseCase ($pokemondebilidadGateway);
        $result = $useCase->Insertar ($pokemondebilidadObj);
        return $result;
    }
public function ListarPokemondebilidad(){
    $pokemondebilidadGateway = new PokemondebilidadGateway();
    $useCase = new PokemondebilidadUseCase ($pokemondebilidadGateway);
    $result = $useCase->Listar();
    return $result;
}
}
