<?php

class Enrutador{

    public function cargarVista($vista){
        switch($vista){
            case 'TipoListarView':
                include_once __DIR__ . '/../views/tipo/TipoListarView.php';
            break;

            case 'TipoAddView':
                include_once __DIR__ . '/../views/tipo/TipoAddView.php';
            break;

            case 'DebilidadAddView':
                include_once __DIR__ . '/../views/debilidad/DebilidadAddView.php';
            break;

            case 'DebilidadListarView':
                include_once __DIR__ . '/../views/debilidad/DebilidadListarView.php';
            break;

            case 'PokemonAddView':
                include_once __DIR__ . '/../views/pokemon/PokemonAddView.php';
            break;

            case 'PokemonListarView':
                include_once __DIR__ . '/../views/pokemon/PokemonListarView.php';
            break;

            case 'EvolucionAddView':
                include_once __DIR__ . '/../views/evolucion/EvolucionAddView.php';
            break;

            case 'EvolucionListarView':
                include_once __DIR__ . '/../views/evolucion/EvolucionListarView.php';
            break;

            case 'PokemondebilidadAddView':
                include_once __DIR__ . '/../views/pokemondebilidad/PokemondebilidadAddView.php';
            break;

            case 'PokemondebilidadListarView':
                include_once __DIR__ . '/../views/Pokemondebilidad/PokemondebilidadListarView.php';
            break;


        }
    }

    public function validarGet($variable){
        if(empty($variable)){
            echo "<script> window.history.back();</script>";
        }else{
            return true;
        }
    }
}