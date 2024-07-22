<?php

require_once __DIR__ . '/IDebilidadGatewayDb.php';
require_once __DIR__ . '/../DataAccess/MysqlConnector.php';
class DebilidadGateway implements IDebilidadGatewayDb{

    public function Insertar(DebilidadIn $debilidad): bool{
            $sqlQuery = "INSERT INTO Debilidad (nombre) VALUES ('{$debilidad->get('Nombre')}')";
            $mysqlConnector = new MysqlConnector();
            $result = $mysqlConnector->consultaSimple($sqlQuery);
            return $result;
    }
    public function ListarDebilidad():array{
        $sqlQuery = "SELECT * FROM Debilidad";
        $mysqlConnector = new MysqlConnector();
        $result = $mysqlConnector->consultaRetorno($sqlQuery);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}