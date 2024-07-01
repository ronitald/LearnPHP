<?php

// CLASE ABSTRACTA VEHICULO QUE DEFINE EL MÉTODO ABSTRACTO MONTARSE_VEHICULO
abstract class Vehiculo {
    abstract public function montarse_vehiculo();
}

// CLASE CARRO QUE HEREDA DE VEHICULO E IMPLEMENTA EL MÉTODO ABSTRACTO
class Carro extends Vehiculo {
    public function montarse_vehiculo() {
        return "Montando en el carro...";
    }
}

// CLASE BICICLETA QUE HEREDA DE VEHICULO E IMPLEMENTA EL MÉTODO ABSTRACTO
class Bicicleta extends Vehiculo {
    public function montarse_vehiculo() {
        return "Montando la bicicleta...";
    }
}

// CREAR UNA INSTANCIA DE CARRO Y LLAMAR AL MÉTODO MONTARSE_VEHICULO
$carro = new Carro();
echo $carro->montarse_vehiculo() . '<br>';

// CREAR UNA INSTANCIA DE BICICLETA Y LLAMAR AL MÉTODO MONTARSE_VEHICULO
$bicicleta = new Bicicleta();
echo $bicicleta->montarse_vehiculo() . '<br>';

?>
