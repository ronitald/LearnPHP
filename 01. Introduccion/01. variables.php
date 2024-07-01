<?php
// IMPRIMIR MENSAJE INICIAL
echo 'Hola Munditoo';

// VARIABLES PHP
$nombre = 'Ronald'; // NOMBRE DEL USUARIO
$edad = 16; // EDAD DEL USUARIO
$peso = 52.4; // PESO DEL USUARIO
$activo = true; // ESTADO ACTIVO DEL USUARIO

// IMPRIMIR OTRO MENSAJE
echo 'Holaaa';

// IMPRIMIR VALORES DE LAS VARIABLES $peso Y $edad
echo '<br>' . $peso . '<br>' . $edad;

// CONDICIONAL PARA DETERMINAR SI EL USUARIO ES MAYOR O MENOR DE EDAD
if ($edad >= 18) {
    echo 'Usted es mayor de edad';
} else {
    echo 'Usted es menor de edad';
}

?>
