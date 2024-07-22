<?php 

interface IDebilidadGatewayDb {
    public function Insertar(DebilidadIn $debilidad):bool;
    public function ListarDebilidad():array;
}