<?php

require_once "ClassEmpleado.php";
require_once "ClassCliente.php";

$objEmpleado = new Empleado(787878, "Victor Garcia", 25);
$objEmpleado->setPuesto("Administrador");

echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

$objCliente = new Cliente(434343, "Marieta Marres", 20);
$objCliente->setCredito(1000);

echo $objCliente->getDatosPersonales();
echo "Credito: " . $objCliente->getCredito();
