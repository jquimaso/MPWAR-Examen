<?php

namespace Mpwar;


class RecomendadorExternoRedknow implements intfReproductorMusica{



    private $sistema_externo_inicializado = false;

    public function inicializarSistemaExternoRedknow()
    {
        $this->sistema_externo_inicializado = true;
    }

    public function obtenerRecomendaciones($arg){
        return array(
            'La vida está de lujo',
            'El cuarto de Tula');

    }


}