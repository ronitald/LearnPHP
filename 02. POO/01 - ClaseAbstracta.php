<?php

// CLASE ABSTRACTA FRUTA QUE NO SE PUEDE INSTANCIAR DIRECTAMENTE
abstract class Fruta {
    private $nombre;

    // CONSTRUCTOR DE LA CLASE ABSTRACTA FRUTA
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // MÉTODO ABSTRACTO PARA OBTENER EL COLOR DE LA FRUTA
    abstract public function obtener_color();
}

// CLASE MANZANA QUE HEREDA DE FRUTA
class Manzana extends Fruta {
    // IMPLEMENTACIÓN DEL MÉTODO PARA OBTENER EL COLOR DE LA MANZANA
    public function obtener_color() {
        return "ROJA";
    }
}

// CLASE BANANO QUE HEREDA DE FRUTA
class Banano extends Fruta {
    // IMPLEMENTACIÓN DEL MÉTODO PARA OBTENER EL COLOR DEL BANANO
    public function obtener_color() {
        return "AMARILLO";
    }
}

?>
