<?php

declare(strict_types=1);

class Automotor {
    // ATRIBUTOS PRIVADOS
    private string $marca; 
    private string $modelo;   
    private int $precio;       

    // CONSTRUCTOR DE LA CLASE AUTOMOTOR
    public function __construct(string $marca, string $modelo, int $precio){
        // INICIALIZAR EL ATRIBUTO
        $this->marca = $marca;   
        $this->modelo = $modelo;    
        $this->precio = $precio;   
    }

    // MÉTODO GET PARA OBTENER LA INFORMACION DEL ATRIBUTO
    public function get_marca(){
        return $this->marca;
    }

    public function get_modelo(){
        return $this->modelo;
    }

    public function get_precio(){
        return $this->precio;
    }

    // MÉTODO SET PARA ESTABLECER LA INFORMACION DEL ATRIBUTO
    public function set_marca($marca){
        $this->marca = $marca;
    }

    public function set_modelo($modelo){
        $this->modelo = $modelo;
    }

    public function set_precio($precio){
        $this->precio = $precio;
    }

    // MÉTODO QUE SALUDA Y MUESTRA INFORMACIÓN DEL ENTORNO PHP
    public function saludar(){
        echo 'Bienvenido, desde la SUPERCLASE Automotor';  // MENSAJE DE BIENVENIDA
        echo '<br>'. 'Versión PHP: '. phpinfo();  // MOSTRAR INFORMACIÓN DE PHP
    }
}

?>
