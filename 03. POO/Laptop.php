<?php

// INCLUYE EL ARCHIVO QUE CONTIENE LA CLASE PADRE 'Computador'
require_once('computador.php');

// DEFINICIÓN DE LA CLASE 'Laptop' QUE HEREDA DE 'Computador'
class Laptop extends Computador {
    
    // ATRIBUTOS PRIVADOS ESPECÍFICOS DE 'Laptop'
    private bool $tactil;
    private string $pot_bateria;

    // CONSTRUCTOR DE LA CLASE 'Laptop' QUE RECIBE PARÁMETROS PROPIOS Y DE LA CLASE PADRE 'Computador'
    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertos_usb, bool $tactil, string $pot_bateria) {
        // LLAMA AL CONSTRUCTOR DE LA CLASE PADRE 'Computador' PARA INICIALIZAR SUS ATRIBUTOS
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertos_usb);
        
        // INICIALIZA LOS ATRIBUTOS ESPECÍFICOS DE 'Laptop'
        $this->tactil = $tactil;
        $this->pot_bateria = $pot_bateria;
    }

    // MÉTODOS GETTER PARA OBTENER LOS VALORES DE LOS ATRIBUTOS PRIVADOS
    public function get_tactil() {
        return $this->tactil;
    }
    public function get_pot_bateria() {
        return $this->pot_bateria;
    }

    // MÉTODOS SETTER PARA ASIGNAR NUEVOS VALORES A LOS ATRIBUTOS PRIVADOS
    public function set_tactil(bool $tactil) {
        $this->tactil = $tactil;
    }
    public function set_pot_bateria(string $pot_bateria) {
        $this->pot_bateria = $pot_bateria;
    }
}

?>
