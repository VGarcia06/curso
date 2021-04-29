<?php

require_once "ClassMueble.php";

//final indica que esta clase ya no podra heredar a otras clases
final class Mesa extends Mueble
{
    private $strForma = "";
    protected $strTamanio;

    public function __construct(string $descripcion, float $precio, string $color, string $material, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $color, $material);
        $this->strTamanio = $tamanio;
    }

    public function setForma(string $forma)
    {
        $this->strForma = $forma;
    }

    // Redefiniendo Método
    public function getInfoProducto()
    {
        $arrProducto = array( //array asociativo
            'producto' => $this->strDescripcion,
            'precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStockMinino,
            'estado' => $this->strStatus,
            'color' => $this->strColor,
            'material' => $this->strMaterial,
            'tamaño' => $this->strTamanio,
            'forma' => $this->strForma,
        );

        return $arrProducto;
    }
}
