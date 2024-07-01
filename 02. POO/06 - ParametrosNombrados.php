<?php

// FUNCIÓN PARA SUMAR DOS NÚMEROS, CON EL SEGUNDO NÚMERO POR DEFECTO IGUAL A 5
function sumar($numero1, $numero2 = 5) {
    $resultado = $numero1 + $numero2;
    echo "La suma es: $resultado";
}

// LLAMADA A LA FUNCIÓN SUMAR CON UN PRIMER ARGUMENTO DE 20 Y EL SEGUNDO ARGUMENTO POR DEFECTO
sumar(numero1: 20);

?>
