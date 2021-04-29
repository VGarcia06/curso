<?php

require_once "ClassProducto.php";

class Mueble extends Producto
{
    public $strColor;
    public $strMaterial;
    public $strStatus = "Agotado"; //Redefiniendo una propiedad

    public function __construct(string $descripcion, float $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);

        $this->strColor = $color;
        $this->strMaterial = $material;
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
        );

        return $arrProducto;
    }
}
