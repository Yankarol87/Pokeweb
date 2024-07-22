<?php 

interface IPokemonGatewayDb {
    public function Insertar(PokemonIn $pokemon):bool;
    public function ListarPokemon():array;
}