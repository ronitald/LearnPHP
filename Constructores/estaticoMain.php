<?php

require('estatico.php'); // IMPORTA EL ARCHIVO DONDE SE DEFINE LA CLASE EMPLEADO

// INSTANCIAS DE LA CLASE EMPLEADO
$empleado1 = new Empleado('Maikol', '25-3-2000');
$empleado2 = new Empleado('Valentina', '25-4-1996');
$empleado3 = new Empleado('Ronald', '17-8-2005');

// LLAMADA A UN MÉTODO NO ESTÁTICO DESDE UN OBJETO DE LA CLASE EMPLEADO
$empleado1->metodoNoEstatico();

// LLAMADA A UN MÉTODO ESTÁTICO DESDE LA CLASE EMPLEADO CON EL OPERADOR ::
Empleado::metodoEstatico();

// ACCESO Y MODIFICACIÓN DE UN ATRIBUTO ESTÁTICO DE LA CLASE EMPLEADO
Empleado::$nacionalidad = 'Colombiana';
echo "Tengo nacionalidad: " . Empleado::$nacionalidad . '<br>';

// LLAMADA AL MÉTODO CONTAR PARA CONTAR EL NÚMERO DE VECES QUE SE HA INVOCADO
$empleado1->contar();
echo '<br>';
$empleado2->contar();
echo '<br>';
$empleado3->contar();

?>
