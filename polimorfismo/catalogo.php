<?php
require_once "ClassMesa.php";

$objCama = new Producto("Cama", 10500);
$arrInfoProducto = $objCama->getInfoProducto();

print_r('<pre>');
print_r($arrInfoProducto);
print_r('</pre>');

$objMueble = new Mueble("Closet", 20000, "Café", "Madera");
$arrInfoMueble = $objMueble->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMueble);
print_r('</pre>');

$objMesa = new Mesa("Closet", 20000, "Café", "Madera", "3mt");
$objMesa->setForma("Redonda");
$arrInfoMesa = $objMesa->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMesa);
print_r('</pre>');
