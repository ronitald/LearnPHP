<?php

require_once('Automotor.php');

class Automovil extends Automotor {

    // ATRIBUTOS PRIVADOS DE LA SUBCLASE AUTOMOVIL
    private string $tipo;     
    private string $color;    

    // CONSTRUCTOR QUE INVOLUCRA LOS ATRIBUTOS DE LA SUPERCLASE AUTOMOTOR Y LOS DE LA SUBCLASE AUTOMOVIL
    public function __construct(string $marca, string $modelo, int $precio, string $tipo, string $color) {

        // LLAMADA AL CONSTRUCTOR DE LA SUPERCLASE PARA INICIALIZAR SUS ATRIBUTOS
        parent::__construct($marca, $modelo, $precio);

        // INICIALIZACIÓN DE LOS ATRIBUTOS PROPIOS DE LA SUBCLASE AUTOMOVIL
        $this -> tipo = $tipo;
        $this -> color = $color;
    }

    // MÉTODO SET PARA ESTABLECER LA INFORMACION DEL ATRIBUTO
    public function set_tipo($tipo){
        $this -> tipo = $tipo;
    }

    public function set_color($color){
        $this -> color = $color;
    }

    // MÉTODO GET PARA OBTENER LA INFORMACION DEL ATRIBUTO
    public function get_tipo(){
        return $this -> tipo;
    }

    public function get_color(){
        return $this -> color;
    }
}

?>
