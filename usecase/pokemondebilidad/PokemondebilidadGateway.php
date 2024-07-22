<?php

require_once __DIR__ . '/IPokemondebilidadGatewayDb.php';
require_once __DIR__ . '/../DataAccess/MysqlConnector.php';
class PokemondebilidadGateway implements IPokemondebilidadGatewayDb{

    public function Insertar(PokemondebilidadIn $pokemondebilidad): bool{
            $sqlQuery = "INSERT INTO Pokemondebilidad (pokemonId, debilidadId) VALUES ('{$pokemondebilidad->get('PokemonId')}', '{$pokemondebilidad->get('DebilidadId')}')";
            $mysqlConnector = new MysqlConnector();
            $result = $mysqlConnector->consultaSimple($sqlQuery);
            return $result;
    }
    public function ListarPokemondebilidad():array{
        $sqlQuery = "SELECT * FROM Pokemondebilidad";
        $mysqlConnector = new MysqlConnector();
        $result = $mysqlConnector->consultaRetorno($sqlQuery);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}