<?php

// INCLUIR LA CLASE PERSONA DEL ESPACIO DE NOMBRES SENA DESDE EL ARCHIVO clase2.php
require('clase2.php');

// USAR EL ALIAS S PARA EL ESPACIO DE NOMBRES SENA
use Sena as S;

// CREAR UNA INSTANCIA DE PERSONA EN EL ESPACIO DE NOMBRES SENA
$persona1 = new S\Persona('MAIKOL', 'maik@gmail.com', 'Buenos Dias!');

// IMPRIMIR DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES SENA
echo 'IMPRIMIENDO DATOS DE LA CLASE PERSONA EN EL ESPACIO DE NOMBRES SENA' . '<br>';
echo 'NOMBRES: ' . $persona1->nombre . '<br>';
echo 'CORREO: ' . $persona1->correo . '<br>';
echo 'SALUDO: ' . S\Persona::$saludo . '<br>';

?>
