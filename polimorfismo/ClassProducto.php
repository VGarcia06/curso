<?php

class Producto
{
    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinino = 10;
    protected $strStatus = "Activo";

    public function __construct(string $descripcion, float $precio)
    {
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }

    public function getInfoProducto()
    {
        $arrProducto = array( //array asociativo
            'producto' => $this->strDescripcion,
            'precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStockMinino,
            'estado' => $this->strStatus,
        );

        return $arrProducto;
    }
}
