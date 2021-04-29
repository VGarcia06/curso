<?php

class Persona
{
    public $intDpi;
    public $strNombre;
    public $intEdad;

    public function __construct(int $dpi, string $nombre, int $edad)
    {
        $this->intDpi = $dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }

    public function getDatosPersonales()
    {
        //Para color alguna variable dentro de comillas dobles se utiliza las llaves
        //Si fueran comillas simples no se mostraria el contenido
        $datos = "
            <h2>DATOS PERSONALES</h2>
            DPI: {$this->intDpi}<br>
            Nombre: {$this->strNombre}<br>
            Edad: {$this->intEdad}<br>
         ";

        return $datos;
    }
}
