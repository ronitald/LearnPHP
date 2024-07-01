<?php
// ENCAPSULAMIENTO 

// DEFINICIÓN DE LA CLASE DOCENTE
class Docente {
    // PROPIEDADES PRIVADAS DE LA CLASE
    private string $tipo_doc;
    private string $num_doc;
    
    // CONSTRUCTOR DE LA CLASE
    public function __construct($tipo_doc, $num_doc) {
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
    }

    // METODOS 'GET' PARA OBTENER LOS DATOS DE LA CLASE
    public function get_tipo_doc() {
        return $this->tipo_doc;
    }

    public function get_num_doc() {
        return $this->num_doc;
    }

    // METODOS 'SET' PARA ESTABLECER LOS DATOS DE LA CLASE
    public function set_tipo_doc($tipo_doc) {
        $this->tipo_doc = $tipo_doc;
    }

    public function set_num_doc($num_doc) {
        $this->num_doc = $num_doc;
    }
}

// CREAR INSTANCIAS DE LA CLASE DOCENTE
$docente1 = new Docente('CC', '30785000');
$docente2 = new Docente('TI', '20784000');
$docente3 = new Docente('RC', '30900000');
$docente4 = new Docente('TI', '45346896');
$docente5 = new Docente('CC', '43457768');

// MOSTRAR LOS DATOS DE LOS DOCENTES UTILIZANDO LOS METODOS 'GET'
echo '<br>' . 'DOCENTE 1:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente1->get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente1->get_num_doc();
echo '<br>';

echo '<br>' . 'DOCENTE 2:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente2->get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente2->get_num_doc();
echo '<br>';

echo '<br>' . 'DOCENTE 3:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente3->get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente3->get_num_doc();
echo '<br>';

echo '<br>' . 'DOCENTE 4:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente4->get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente4->get_num_doc();
echo '<br>';

echo '<br>' . 'DOCENTE 5:';
echo '<br>' . 'TIPO DE DOCUMENTO: ' . $docente5->get_tipo_doc();
echo '<br>' . 'NUMERO DE DOCUMENTO: ' . $docente5->get_num_doc();

// MODIFICAR LOS DATOS DEL OBJETO ($docente1) UTILIZANDO LOS METODOS 'SET'
$docente1->set_tipo_doc('CC');
$docente1->set_num_doc('3285000');

?>
