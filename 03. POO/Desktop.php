<?php

// INCLUYE EL ARCHIVO QUE CONTIENE LA CLASE PADRE 'Computador'
require_once('computador.php');

// DEFINICIÓN DE LA CLASE 'Desktop' QUE HEREDA DE 'Computador'
class Desktop extends Computador {
    
    // ATRIBUTO PRIVADO PARA INDICAR SI TIENE UPS
    private bool $ups;

    // CONSTRUCTOR DE LA CLASE 'Desktop' QUE RECIBE PARÁMETROS PROPIOS Y DE LA CLASE PADRE 'Computador'
    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertos_usb, bool $ups) {
        // LLAMA AL CONSTRUCTOR DE LA CLASE PADRE 'Computador' PARA INICIALIZAR SUS ATRIBUTOS
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertos_usb);
        
        // INICIALIZA EL ATRIBUTO 'ups' ESPECÍFICO DE 'Desktop'
        $this->ups = $ups;
    }

    // MÉTODO GETTER PARA OBTENER EL ESTADO DE UPS
    public function get_ups() {
        return $this->ups;
    }

    // MÉTODO SETTER PARA ASIGNAR EL ESTADO DE UPS
    public function set_ups(bool $ups) {
        $this->ups = $ups;
    }
}

?>
