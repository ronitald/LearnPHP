<?php

// DECLARACIÓN ESTRICTA DE TIPOS PARA LA FUNCION
declare(strict_types=1);

// FUNCIÓN QUE UNE DOS CADENAS DE TEXTO
function unir_palabras(string $palabra1, string $palabra2) {
    return $palabra1 . $palabra2;
}

// EJEMPLO DE USO CORRECTO: UNIR PALABRAS DE DOS CADENAS DE TEXTO
$palabras1 = unir_palabras('Ronald', 'Puerto');

// EJEMPLO QUE GENERA ERROR: INTENTANDO UNIR UNA CADENA DE TEXTO CON UN ENTERO
// $palabras2 = unir_palabras('Ronald', 21);

?>
