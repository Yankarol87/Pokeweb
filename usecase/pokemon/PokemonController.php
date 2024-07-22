<?php
require_once __DIR__ . '/PokemonUseCase.php';
require_once __DIR__ . '/PokemonGateway.php';
require_once __DIR__ . '/../../Dto/PokemonIn.php';
class PokemonController {
    public function InsertarPokemon(PokemonIn $pokemonObj){
        $pokemonGateway = new PokemonGateway();
        $useCase = new PokemonUseCase ($pokemonGateway);
        $result = $useCase->Insertar ($pokemonObj);
        return $result;
    }
public function ListarPokemon(){
    $pokemonGateway = new PokemonGateway();
    $useCase = new PokemonUseCase ($pokemonGateway);
    $result = $useCase->Listar();
    return $result;
}
}
