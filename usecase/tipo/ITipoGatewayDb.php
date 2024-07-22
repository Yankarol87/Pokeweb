<?php 

interface ITipoGatewayDb {
    public function Insertar(TipoIn $tipo):bool;
    public function ListarTipos():array;
}