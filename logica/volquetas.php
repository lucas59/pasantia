<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of volquetas
 *
 * @author Lucas
 */
class volquetas {
    public $nro;
    public $latitud;
    public $longitud;
    
    function __construct($nro, $latitud, $longitud) {
        $this->nro = $nro;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }
    
    function getNro() {
        return $this->nro;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }
    
    function setNro($nro) {
        $this->nro = $nro;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    
        

    //put your code here
}
