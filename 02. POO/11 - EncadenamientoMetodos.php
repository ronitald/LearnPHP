<?php

class CuentaBancaria {
    private $saldo = 0;

    // MÉTODO PARA DEPOSITAR UNA CANTIDAD A LA CUENTA
    public function depositar($cantidad) {
        $this->saldo += $cantidad;
        return $this; // Devuelve $this para permitir el encadenamiento de métodos
    }

    // MÉTODO PARA RETIRAR UNA CANTIDAD DE LA CUENTA
    public function retirar($cantidad) {
        $this->saldo -= $cantidad;
        return $this; // Devuelve $this para permitir el encadenamiento de métodos
    }

    // MÉTODO PARA OBTENER EL SALDO ACTUAL
    public function get_saldo() {
        return $this->saldo;
    }
}

// CREACIÓN DE UNA INSTANCIA DE CUENTABANCARIA
$cuenta = new CuentaBancaria();

// EJECUCIÓN DE MÚLTIPLES MÉTODOS ENCADENADOS Y OBTENCIÓN DEL SALDO ACTUAL
$saldoActual = $cuenta->depositar(3000)->retirar(1500)->get_saldo();

// IMPRESIÓN DEL SALDO ACTUAL
echo 'El saldo actual es: ' . $saldoActual;

?>
