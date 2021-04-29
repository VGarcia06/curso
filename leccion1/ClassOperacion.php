<?php

class Operacion
{
    public $cantidadUno = 0;
    public $cantidadDos = 0;
    public $resultado = 0;

    public function __construct($intCant1, $intCant2)
    {
        //$this-> , referencia a la clase y permite acceder a sus propiedas
        $this->cantidadUno = $intCant1;
        $this->cantidadDos = $intCant2;
    }

    public function getSuma()
    {
        $this->resultado = $this->cantidadUno + $this->cantidadDos;
        return $this->resultado;
    }

    public function getResta()
    {
        $this->resultado = $this->cantidadUno - $this->cantidadDos;
        return $this->resultado;
    }

    public function getMultiplicacion()
    {
        $this->resultado = $this->cantidadUno * $this->cantidadDos;
        return $this->resultado;
    }
} //End class Operacion
