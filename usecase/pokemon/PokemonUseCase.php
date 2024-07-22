<?php
require_once __DIR__ . '/IPokemonGatewayDb.php';
require_once __DIR__ . '/../../Dto/RespuestaGenerica.php';
class PokemonUseCase{
    private $gateway;
    public function __construct(IPokemonGatewayDb $gateway){
        $this->gateway = $gateway;
    }

    public function Insertar(PokemonIn $pokemon): RespuestaGenerica{
        $respuestaGenerica = new RespuestaGenerica();
        
        try{
            $respuestaMetodo = $this->gateway->Insertar($pokemon);  
            if($respuestaMetodo){
                $respuestaGenerica->status = "ok";
                $respuestaGenerica->body = true;
                $respuestaGenerica->message = "Registro exitoso";
            }else{
                $respuestaGenerica->status = "error";
                $respuestaGenerica->body = false;
                $respuestaGenerica->message = "Error al registrar";
            }
        }catch(Exception $e){
            $respuestaGenerica->status = "error";
            $respuestaGenerica->message = $e->getMessage();
        }
        return $respuestaGenerica;
    }

    public function Listar():RespuestaGenerica{
        $respuestaGenerica = new RespuestaGenerica();
        try{
            $respuestaMetodo = $this->gateway->ListarPokemon();
            $respuestaGenerica->status = "ok";
            $respuestaGenerica->body = $respuestaMetodo;
            $respuestaGenerica->message = "Consulta exitosa";
        }catch(Exception $e){
            $respuestaGenerica->status = "error";
            $respuestaGenerica->message = $e->getMessage();
            $respuestaGenerica->body = [];
        }
        return $respuestaGenerica;
    }
}