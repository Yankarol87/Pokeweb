<?php 

interface IPokemondebilidadGatewayDb {
    public function Insertar(PokemondebilidadIn $pokemondebilidad):bool;
    public function ListarPokemondebilidad():array;
}