<?php 

interface IEvolucionGatewayDb {
    public function Insertar(EvolucionIn $evolucion):bool;
    public function ListarEvolucion():array;
}