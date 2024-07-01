<?php

// INTERFAZ ANIMAL QUE DEFINE UN MÉTODO HACER_SONIDO
interface Animal {
    public function hacer_sonido();
}

// CLASE PERRO QUE IMPLEMENTA LA INTERFAZ ANIMAL
class Perro implements Animal {
    // IMPLEMENTACIÓN DEL MÉTODO HACER_SONIDO PARA EL PERRO
    public function hacer_sonido() {
        echo "Guau Guau";
    }
}

// CLASE GATO QUE IMPLEMENTA LA INTERFAZ ANIMAL
class Gato implements Animal {
    // IMPLEMENTACIÓN DEL MÉTODO HACER_SONIDO PARA EL GATO
    public function hacer_sonido() {
        echo "Miau Miau";
    }
}

?>
