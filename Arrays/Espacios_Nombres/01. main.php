<?php

// INCLUIR LA CLASE PERSONA DEL ESPACIO DE NOMBRES ABC DESDE EL ARCHIVO clase1.php
require('clase1.php');

// CREAR UNA INSTANCIA DE PERSONA EN EL ESPACIO DE NOMBRES ABC
$persona1 = new Abc\Persona('RONALD PUERTO', 'ronaldpuerto65@gmail.com', 'Buenos Dias!');

// IMPRIMIR DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES ABC
echo 'IMPRIMIENDO DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES ABC' . '<br>';
echo 'NOMBRES: ' . $persona1->nombre . '<br>';
echo 'CORREO: ' . $persona1->correo . '<br>';
echo 'SALUDO: ' . Abc\Persona::$saludo . '<br>';

// INCLUIR LA CLASE PERSONA DEL ESPACIO DE NOMBRES SENA DESDE EL ARCHIVO clase2.php
require('clase2.php');

// CREAR UNA INSTANCIA DE PERSONA EN EL ESPACIO DE NOMBRES SENA
$persona2 = new Sena\Persona('RONALD PUERTO', 'ronaldpuerto65@gmail.com', 'Buenos Dias!');

// IMPRIMIR DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES SENA
echo '<br>';
echo 'IMPRIMIENDO DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES SENA' . '<br>';
echo 'NOMBRES: ' . $persona2->nombre . '<br>';
echo 'CORREO: ' . $persona2->correo . '<br>';
echo 'SALUDO: ' . Sena\Persona::$saludo . '<br>';

?>
