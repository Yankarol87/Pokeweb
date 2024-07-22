<?php
require_once __DIR__ . '/IEvolucionGatewayDb.php';
require_once __DIR__ . '/../../Dto/RespuestaGenerica.php';
class EvolucionUseCase{
    private $gateway;
    public function __construct(IEvolucionGatewayDb $gateway){
        $this->gateway = $gateway;
    }

    public function Insertar(EvolucionIn $evolucion): RespuestaGenerica{
        $respuestaGenerica = new RespuestaGenerica();
        
        try{
            $respuestaMetodo = $this->gateway->Insertar($evolucion);  
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
            $respuestaMetodo = $this->gateway->ListarEvolucion();
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