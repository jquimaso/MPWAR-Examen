<?php

namespace Mpwar;


class RecomendadorExternoBlueknow implements intfReproductorMusica{



    private $sistema_externo_inicializado = false;

    public function inicializarSistemaExternoBlueknow()
    {
        $this->sistema_externo_inicializado = true;
    }

    public function obtenerRecomendaciones($arg){
        return array(
            'Cancion 1',
            'cancion 2'
        );
    }



}
