<?php
// UNA CLASE ES UNA PLANTILLA QUE INDICA CÓMO SON LOS DATOS
// UN OBJETO ES EL DATO PROPIAMENTE DICHO

// DEFINICIÓN DE LA CLASE APRENDIZ
class Aprendiz {
    // PROPIEDADES O ATRIBUTOS DE LA CLASE
    public string $tipo_doc;
    public string $num_doc;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;
    
    // CONSTRUCTOR DE LA CLASE
    public function __construct(
        string $tipo_doc, 
        string $num_doc, 
        string $nombre, 
        string $apellido, 
        string $correo, 
        int $edad, 
        float $peso, 
        bool $activo
    ) {
        // ASIGNACIÓN DE VALORES A LAS PROPIEDADES DE LA CLASE
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->edad = $edad;
        $this->peso = $peso;
        $this->activo = $activo;
    }
}

// CREAR OBJETO DE LA CLASE APRENDIZ
$aprendiz1 = new Aprendiz('CC', '1019762940', 'RONALD', 'PUERTO', 'ronaldpuerto65@gmail.com', 18, 45.0, true);

// MOSTRAR LAS PROPIEDADES DEL OBJETO
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $aprendiz1->tipo_doc;
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $aprendiz1->num_doc;
echo '<br>' . 'NOMBRE: ' . $aprendiz1->nombre;
echo '<br>' . 'APELLIDO: ' . $aprendiz1->apellido;
echo '<br>' . 'CORREO: ' . $aprendiz1->correo;
echo '<br>' . 'EDAD: ' . $aprendiz1->edad;
echo '<br>' . 'PESO: ' . $aprendiz1->peso;
echo '<br>' . 'ACTIVO: ' . ($aprendiz1->activo ? 'Sí' : 'No');

?>
