<?php

// UNA CLASE ABSTRACTA FUNCIONA PARA HACER HEREDADA POR OTRAS... 
// NO SE PUEDE INSTANCIAR.
// LAS CLASES ABSTRACTAS SE USAN PARA ESTANDARIZAR LAS APLICACIONES.
// UNA CLASE ABSTRACTA SERVIRA PARA SER HEREDADA POR OTRAS CLASES.

// CLASE ABSTRACTA FIGURA QUE NO SE PUEDE INSTANCIAR DIRECTAMENTE
abstract class Figura {
    private string $nombre;
    private float $num_lados;

    // CONSTRUCTOR DE LA CLASE ABSTRACTA FIGURA
    public function __construct(string $nombre, float $num_lados) {
        $this->nombre = $nombre;
        $this->num_lados = $num_lados;
    }

    // OBTENER EL NOMBRE DE LA FIGURA
    public function get_nombre() {
        return $this->nombre;
    }

    // OBTENER EL NUMERO DE LADOS DE LA FIGURA
    public function get_num_lados() {
        return $this->num_lados;
    }

    // MÉTODO ABSTRACTO PARA IMPRIMIR LA INFORMACIÓN DE LA FIGURA
    abstract public function imprimir();
}

// CLASE TRIANGULO QUE HEREDA DE FIGURA
class Triangulo extends Figura {
    private float $base;
    private float $altura;

    // CONSTRUCTOR DE LA CLASE TRIANGULO
    public function __construct(float $base, float $altura) {
        parent::__construct('TRIANGULO', 3);
        $this->base = $base;
        $this->altura = $altura;
    }

    // MÉTODO PARA CALCULAR EL ÁREA DEL TRIÁNGULO
    public function calcular_area() {
        $area = ($this->base * $this->altura) / 2;
        return $area;
    }

    // OBTENER LA BASE DEL TRIÁNGULO
    public function get_base() {
        return $this->base;
    }

    // OBTENER LA ALTURA DEL TRIÁNGULO
    public function get_altura() {
        return $this->altura;
    }

    // IMPLEMENTACIÓN DEL MÉTODO IMPRIMIR DE LA CLASE FIGURA
    public function imprimir() {
        echo 'SOY UN METODO DE: ' . $this->get_nombre() . '<br>';
        echo '<br>';
    }
}

// INSTANCIA DEL TRIÁNGULO
$triangulo1 = new Triangulo(20, 5);
$area_triangulo = $triangulo1->calcular_area();

// IMPRIMIR INFORMACIÓN DEL TRIÁNGULO
$triangulo1->imprimir();
echo 'NOMBRE DE LA FIGURA: ' . $triangulo1->get_nombre() . '<br>';
echo 'NUMERO DE LADOS: ' . $triangulo1->get_num_lados() . '<br>';
echo 'BASE: ' . $triangulo1->get_base() . '<br>';
echo 'ALTURA: ' . $triangulo1->get_altura() . '<br>';
echo 'EL AREA DEL TRIANGULO ES: ' . $triangulo1->calcular_area() . '<br>';

?>  
