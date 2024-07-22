<?php

class EvolucionIn{

    private $EvolucionId;
    private $Nombre;
    private $PokemonId;

    public function __construct($Nombre, $PokemonId){ 
        $this->Nombre = $Nombre;
        $this->PokemonId = $PokemonId;
    }
        
        public function get($atributo){
             return $this->$atributo;
        }
        
        public function set($atributo, $valor){ 
            $this->$atributo=$valor;
        }
        
}