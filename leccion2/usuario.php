<?php
require_once "ClassUsuario.php";

$objUsuario = new Usuario("Victor Garcia", "vgarciar@gmail.com", "Admin");

echo $objUsuario->getPerfil();

$objUsuario->setCambiarClave("123456789");

echo "<br><br>";

echo $objUsuario->getPerfil();
