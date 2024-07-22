<?php

class PokemondebilidadIn{

    private $PokemondebilidadId;
    private $PokemonId;
    private $DebilidadId;
    public function __construct($PokemondebilidadId, $PokemonId, $DebilidadId){ 
        $this->PokemondebilidadId = $PokemondebilidadId;
        $this->PokemonId = $PokemonId;
        $this->DebilidadId = $DebilidadId;
    }
        public function get($atributo){
             return $this->$atributo;
        }
        
        public function set($atributo, $valor){ 
            $this->$atributo=$valor;
        }
        
}