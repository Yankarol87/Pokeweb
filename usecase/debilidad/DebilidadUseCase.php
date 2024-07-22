<?php
require_once __DIR__ . '/IDebilidadGatewayDb.php';
require_once __DIR__ . '/../../Dto/RespuestaGenerica.php';
class DebilidadUseCase{
    private $gateway;
    public function __construct(IDebilidadGatewayDb $gateway){
        $this->gateway = $gateway;
    }

    public function Insertar(DebilidadIn $debilidad): RespuestaGenerica{
        $respuestaGenerica = new RespuestaGenerica();
        
        try{
            $respuestaMetodo = $this->gateway->Insertar($debilidad);  
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
            $respuestaMetodo = $this->gateway->ListarDebilidad();
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