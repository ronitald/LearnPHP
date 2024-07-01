<?php

// TRAIT FECHA QUE PROPORCIONA UN MÉTODO PARA OBTENER LA FECHA ACTUAL
trait Fecha {
    public function obtener_fecha() {
        return date('Y-m-d');
    }
}

// CLASE USER QUE UTILIZA LA TRAIT FECHA
class User {
    use Fecha;

    // MÉTODO PARA CREAR UN USUARIO E IMPRIMIR LA FECHA DE CREACIÓN
    public function crear_usuario() {
        echo "Usuario creado el día: " . $this->obtener_fecha();
    }
}

// INSTANCIAR LA CLASE USER Y LLAMAR AL MÉTODO PARA CREAR UN USUARIO
$user = new User();
$user->crear_usuario();

?>
