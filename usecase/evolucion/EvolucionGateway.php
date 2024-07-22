<?php

require_once __DIR__ . '/IEvolucionGatewayDb.php';
require_once __DIR__ . '/../DataAccess/MysqlConnector.php';
class EvolucionGateway implements IEvolucionGatewayDb{

    public function Insertar(EvolucionIn $evolucion): bool{
            $sqlQuery = "INSERT INTO Evolucion (nombre, pokemonId) VALUES ('{$evolucion->get('Nombre')}', '{$evolucion->get('PokemonId')}')";
            $mysqlConnector = new MysqlConnector();
            $result = $mysqlConnector->consultaSimple($sqlQuery);
            return $result;
    }
    public function ListarEvolucion():array{
        $sqlQuery = "SELECT * FROM Evolucion";
        $mysqlConnector = new MysqlConnector();
        $result = $mysqlConnector->consultaRetorno($sqlQuery);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}