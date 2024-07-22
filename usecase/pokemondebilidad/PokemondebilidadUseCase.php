<?php
require_once __DIR__ . '/IPokemondebilidadGatewayDb.php';
require_once __DIR__ . '/../../Dto/RespuestaGenerica.php';
class PokemondebilidadUseCase{
    private $gateway;
    public function __construct(IPokemondebilidadGatewayDb $gateway){
        $this->gateway = $gateway;
    }

    public function Insertar(PokemondebilidadIn $pokemondebilidad): RespuestaGenerica{
        $respuestaGenerica = new RespuestaGenerica();
        
        try{
            $respuestaMetodo = $this->gateway->Insertar($pokemondebilidad);  
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
            $respuestaMetodo = $this->gateway->ListarPokemondebilidad();
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