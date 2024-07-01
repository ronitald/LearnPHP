<?php

// RECIBIR DATOS ENVIADOS DESDE EL FORMULARIO
$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$operacion = $_POST['operacion'];

// CLASE PARA REALIZAR LAS OPERACIONES
class Operaciones {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // MÉTODOS PARA CADA OPERACIÓN
    public function sumar() {
        return $this->num1 + $this->num2;
    }

    public function restar() {
        return $this->num1 - $this->num2;
    }

    public function multiplicar() {
        return $this->num1 * $this->num2;
    }

    public function dividir() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "No se puede dividir por 0.";
        }
    }
}

// CREAR UNA INSTANCIA DE LA CLASE Operaciones
$operaciones = new Operaciones($num1, $num2);

// REALIZAR LA OPERACIÓN SEGÚN LO SELECCIONADO EN EL FORMULARIO
if ($operacion === 'sumar') {
    echo 'SUMA: ' . $operaciones->sumar() . '<br>';
} elseif ($operacion === 'restar') {
    echo 'RESTA: ' . $operaciones->restar() . '<br>';
} elseif ($operacion === 'multiplicar') {
    echo 'MULTIPLICACIÓN: ' . $operaciones->multiplicar() . '<br>';
} elseif ($operacion === 'dividir') {
    echo 'DIVISIÓN: ' . $operaciones->dividir() . '<br>';
}

?>
