<?php

// ESPACIO DE NOMBRES PARA LAS CLASES DE LA EMPRESA SENA
// NO SE DEBE ESCRIBIR CODIGO PHP ANTES DEL NAMESPACE

namespace Sena;

class Persona {
    public string $nombre;
    public string $correo;
    public static string $saludo; 

    // CONSTRUCTOR DE LA CLASE PERSONA
    public function __construct(
        string $nombre,
        string $correo,
        string $saludo
    )
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        self::$saludo = $saludo;
    }

    // METODO PARA OBTENER LOS DATOS DE LA PERSONA
    public function obtener_datos() {
        print_r($this->nombre . ", " . $this->correo . ", " . self::$saludo);
    }
}

?>
