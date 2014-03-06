<?php

namespace Mpwar;


class RecomendadorLocal implements intfReproductorMusica{

    public function obtenerRecomendaciones($arg){
        return array('cancion 1 local', 'cancion 2 local');
    }

}
