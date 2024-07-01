<?php

class Empleado {
    // PROPIEDADES PROTEGIDAS
    protected $nombre;
    protected $fechaNacimiento;
    
    // PROPIEDADES ESTÁTICAS
    public static $nacionalidad;
    public static $contador = 0;

    // CONSTRUCTOR QUE ASIGNA VALORES INICIALES A LAS PROPIEDADES
    public function __construct($nombre, $fecha_nacimiento){
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fecha_nacimiento;
    }

    // MÉTODO ESTÁTICO QUE PUEDE SER INVOCADO SIN INSTANCIAR UN OBJETO
    public static function metodoEstatico(){
        echo "SOY UN METODO ESTATICO. No necesito un objeto, me invocas desde la clase <br>";
    }

    // MÉTODO NO ESTÁTICO QUE REQUIERE UN OBJETO PARA SER INVOCADO
    public function metodoNoEstatico(){
        echo "SOY UN METODO NO ESTATICO. Necesito un objeto que me invoque <br>";
    }

    // MÉTODO PARA CONTAR EL NÚMERO DE VECES QUE SE HA INVOCADO
    public function contar(){
        echo "CONTEO: " . self::$contador+=1;
        return;
    }
}

?>
