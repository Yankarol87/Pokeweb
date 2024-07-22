<?php

require_once __DIR__ . '/ITipoGatewayDb.php';
require_once __DIR__ . '/../DataAccess/MysqlConnector.php';
class TipoGateway implements ITipoGatewayDb{

    public function Insertar(TipoIn $tipo): bool{
            $sqlQuery = "INSERT INTO Tipo (nombre) VALUES ('{$tipo->get('Nombre')}')";
            $mysqlConnector = new MysqlConnector();
            $result = $mysqlConnector->consultaSimple($sqlQuery);
            return $result;
    }
    public function ListarTipos():array{
        $sqlQuery = "SELECT * FROM Tipo";
        $mysqlConnector = new MysqlConnector();
        $result = $mysqlConnector->consultaRetorno($sqlQuery);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}