<?php

// FUNCIÓN PARA CALCULAR EL ÁREA DE UN RECTÁNGULO
function calcular_area($longitud, $ancho) {
    $area = $longitud * $ancho;
    return $area;
}

// VARIABLES PARA LONGITUD Y ANCHO DEL RECTÁNGULO
$longitud = 10;
$ancho = 5;

// LLAMADA A LA FUNCIÓN PARA CALCULAR EL ÁREA
$area = calcular_area($longitud, $ancho);

// IMPRESIÓN DEL RESULTADO
echo 'El área es: ' . $area;

?>
