<?php

require_once('Automotor.php');

class Camion extends Automotor {

    // ATRIBUTOS PRIVADOS DE LA SUBCLASE CAMION
    private int $num_ejes;     
    private float $cap_carga;  //

    // CONSTRUCTOR QUE INVOLUCRA LOS ATRIBUTOS DE LA SUPERCLASE AUTOMOTOR Y LOS DE LA SUBCLASE CAMION
    public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, float $cap_carga) {

        // LLAMADA AL CONSTRUCTOR DE LA SUPERCLASE PARA INICIALIZAR SUS ATRIBUTOS
        parent::__construct($marca, $modelo, $precio);

        // INICIALIZACIÓN DE LOS ATRIBUTOS PROPIOS DE LA SUBCLASE CAMION
        $this -> num_ejes = $num_ejes;
        $this -> cap_carga = $cap_carga;
    }

    // MÉTODO SET PARA ESTABLECER LA INFORMACION DEL ATRIBUTO
    public function set_num_ejes($num_ejes){
        $this -> num_ejes = $num_ejes;
    }

    public function set_cap_carga($cap_carga){
        $this -> cap_carga = $cap_carga;
    }

    // MÉTODO GET PARA OBTENER LA INFORMACION DEL ATRIBUTO
    public function get_num_ejes(){
        return $this -> num_ejes;
    }

    public function get_cap_carga(){
        return $this -> cap_carga;
    }
}
?>
