<?php

class Pared {
    private string $materiales;

    // CONSTRUCTOR DE LA CLASE PARED
    public function __construct($materiales) {
        $this->materiales = $materiales;
        echo 'SOY EL CONSTRUCTOR.' . '<br>' . 'SE EJECUTA AUTOMATICAMENTE.';
        echo '<br>';
    }

    // GETTER PARA OBTENER LOS MATERIALES DE LA PARED
    public function get_materiales(){
        return $this->materiales;
    }

    // SETTER PARA ESTABLECER LOS MATERIALES DE LA PARED
    public function set_materiales($materiales){
        $this->materiales = $materiales;
    }

    // MÉTODO PARA SALUDAR
    public function saludar(){
        echo '<br>'.'Invocando un método PHP. ';
    }
}

// CREACIÓN DE OBJETOS DE LA CLASE PARED
$pared_sala = new Pared('Bloque número 5, 20x20 cm');
$pared_baño = new Pared('Bloque número 6, 21x21 cm');

// LLAMADA AL MÉTODO SALUDAR DEL OBJETO $pared_baño
$pared_baño->saludar();

?>
