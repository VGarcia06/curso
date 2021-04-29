<?php
//Para aplicar herencia de propiedades y metodos se utiliza la directiva extends y ademas se debe incluir la clase
require_once "ClassPersona.php";

class Empleado extends Persona
{
    protected $strPuesto;

    public function _construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad); //Para utilizar el método constructor del Padre
    }

    public function setPuesto(string $puesto)
    {
        $this->strPuesto = $puesto;
    }

    public function getPuesto(): string
    {
        return $this->strPuesto;
    }
}
