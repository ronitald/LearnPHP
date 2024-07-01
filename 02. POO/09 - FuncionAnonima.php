<?php

// FUNCIÓN ANÓNIMA ASIGNADA A LA VARIABLE $verificar_par
$verificar_par = function($numero) {
    // VERIFICAR SI EL NÚMERO ES PAR O IMPAR
    if ($numero % 2 === 0) {
        echo "$numero es un número par.";
    } else {
        echo "$numero es un número impar.";
    }
};

// LLAMADA A LA FUNCIÓN ANÓNIMA CON DISTINTOS NÚMEROS
$verificar_par(7);
echo '<br>';
$verificar_par(6);

?>
