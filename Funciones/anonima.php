<?php

// DEFINICIÓN DE UNA FUNCIÓN ANÓNIMA PARA VERIFICAR SI UN NÚMERO ES MÚLTIPLO DE 5
$multiplos_5 = function ($numero) {
    // COMPRUEBA SI EL NÚMERO ES DIVISIBLE POR 5
    if ($numero % 5 == 0) {
        // DEVUELVE UN MENSAJE INDICANDO QUE EL NÚMERO ES MÚLTIPLO DE 5
        return 'El número es múltiplo de 5';
    } else {
        // DEVUELVE UN MENSAJE INDICANDO QUE EL NÚMERO NO ES MÚLTIPLO DE 5
        return 'El número no es múltiplo de 5';
    }
};

// LLAMADA A LA FUNCIÓN ANÓNIMA CON UN NÚMERO PARA VERIFICAR
$resultado = $multiplos_5(21);

// IMPRIME EL RESULTADO OBTENIDO
echo $resultado;

?>
