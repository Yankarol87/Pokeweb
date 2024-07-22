<?php

require_once __DIR__ . '/IPokemonGatewayDb.php';
require_once __DIR__ . '/../DataAccess/MysqlConnector.php';
class PokemonGateway implements IPokemonGatewayDb{

    public function Insertar(PokemonIn $pokemon): bool{
            $sqlQuery = "INSERT INTO Pokemon (nombre) VALUES ('{$pokemon->get('Nombre')}')";
            $mysqlConnector = new MysqlConnector();
            $result = $mysqlConnector->consultaSimple($sqlQuery);
            return $result;
    }
    public function ListarPokemon():array{
        $sqlQuery = "SELECT P.PokemonId, P.Descripcion, P.Nombre AS 'poke', T.Nombre AS 'Tipo' FROM Pokemon P JOIN Tipo T ON P.TipoId = T.TipoId";
        $mysqlConnector = new MysqlConnector();
        $result = $mysqlConnector->consultaRetorno($sqlQuery);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}