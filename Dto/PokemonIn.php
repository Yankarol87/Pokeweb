<?php

class PokemonIn{

    private $Nombre;

    public function __construct($Nombre){ 
        $this->Nombre = $Nombre;
    }
        
        public function get($atributo){
             return $this->$atributo;
        }
        
        public function set($atributo, $valor){ 
            $this->$atributo=$valor;
        }
        
}