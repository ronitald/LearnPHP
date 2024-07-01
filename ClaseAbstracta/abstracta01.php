<?php

// CLASE ABSTRACTA Figura
abstract class Figura {
    private string $nombre;
    private float $num_lados;

    // Constructor de la clase abstracta Figura
    public function __construct(string $nombre, float $num_lados) {
        $this->nombre = $nombre;
        $this->num_lados = $num_lados;
    }

    // Métodos GET para obtener el nombre y número de lados
    public function get_nombre() {
        return $this->nombre;
    }

    public function get_num_lados() {
        return $this->num_lados;
    }

    // Método abstracto que debe ser implementado por las clases hijas
    abstract public function calcular_area();
}

// CLASE Triangulo que hereda de Figura
class Triangulo extends Figura {
    private float $base;
    private float $altura;

    // Constructor de la clase Triangulo
    public function __construct(float $base, float $altura) {
        parent::__construct('TRIÁNGULO', 3); // Llama al constructor de la clase padre Figura
        $this->base = $base;
        $this->altura = $altura;
    }

    // Método para calcular el área del triángulo (implementación del método abstracto)
    public function calcular_area() {
        $area = ($this->base * $this->altura) / 2;
        return $area;
    }

    // Métodos GET para obtener la base y la altura del triángulo
    public function get_base() {
        return $this->base;
    }

    public function get_altura() {
        return $this->altura;
    }
}

// INSTANCIA DEL TRIÁNGULO
$triangulo1 = new Triangulo(20, 5); // Crear un objeto Triangulo

// Impresión de los datos del triángulo
echo 'NOMBRE DE LA FIGURA: ' . $triangulo1->get_nombre() . '<br>';
echo 'NÚMERO DE LADOS: ' . $triangulo1->get_num_lados() . '<br>';
echo 'BASE: ' . $triangulo1->get_base() . '<br>';
echo 'ALTURA: ' . $triangulo1->get_altura() . '<br>';
echo 'EL ÁREA DEL TRIÁNGULO ES: ' . $triangulo1->calcular_area() . '<br>';

?>
