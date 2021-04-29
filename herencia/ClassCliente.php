<?php
//Para aplicar herencia de propiedades y metodos se utiliza la directiva extends y ademas se debe incluir la clase
require_once "ClassPersona.php";

class Cliente extends Persona
{
    protected $fltCredito;

    public function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad); //Para utilizar el método constructor del Padre
    }

    public function setCredito(float $credito)
    {
        $this->fltCredito = $credito;
    }

    public function getCredito(): float
    {
        return $this->fltCredito;
    }
}
