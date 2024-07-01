<?php

// CLASE ABSTRACTA CARRO QUE DEFINE UN MÉTODO ABSTRACTO ARRANCAR Y MÉTODOS PARA MANEJAR EL MODELO
abstract class Carro {
    private $modelo;

    // MÉTODO ABSTRACTO QUE DEBE SER IMPLEMENTADO POR LAS CLASES HIJAS
    abstract public function arrancar();
    
    // MÉTODO PARA OBTENER EL MODELO DEL CARRO
    public function getModelo() {
        return $this->modelo;
    }

    // MÉTODO PARA ESTABLECER EL MODELO DEL CARRO
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}

// CLASE DEPORTIVO QUE EXTIENDE DE CARRO E IMPLEMENTA EL MÉTODO ARRANCAR
class Deportivo extends Carro {
    public function arrancar() {
        echo "Arrancando el deportivo..." . '<br>';
    }
}

// CREAR UNA INSTANCIA DE DEPORTIVO
$miCoche = new Deportivo();

// ESTABLECER EL MODELO DEL CARRO
$miCoche->setModelo("Mercedes Benz");

// LLAMAR AL MÉTODO ARRANCAR DEL DEPORTIVO
$miCoche->arrancar();

// IMPRIMIR EL MODELO DEL CARRO
echo "Modelo: " . $miCoche->getModelo() . '<br>';

?>
