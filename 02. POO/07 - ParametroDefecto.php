<?php

// FUNCIÓN QUE CUENTA HASTA EL NÚMERO ESPECIFICADO (POR DEFECTO 10)
function contar_hasta($numero = 10) {
    for ($i = 1; $i <= $numero; $i++) {
        echo "$i ";
    }
}

// LLAMADA A LA FUNCIÓN CONTAR_HASTA SIN NINGÚN ARGUMENTO (UTILIZARÁ EL VALOR POR DEFECTO)
contar_hasta(); 
echo '<br>';

// LLAMADA A LA FUNCIÓN CONTAR_HASTA CON UN ARGUMENTO DE 8
contar_hasta(8); 

?>
