<?php

// INCLUYE EL ARCHIVO QUE CONTIENE LA CLASE PADRE 'Computador'
require_once('computador.php');

// OBTENER FECHA ACTUAL LLAMANDO AL MÉTODO ESTÁTICO 'obtener_fecha()' DE LA CLASE 'Computador'
$fechaActual = Computador::obtener_fecha();
echo 'La fecha actual es: ' . $fechaActual . '<div>';

// CONTEO DE OBJETOS CREADOS LLAMANDO AL MÉTODO ESTÁTICO 'obtener_contador()' DE LA CLASE 'Computador'
$contador = Computador::obtener_contador();

echo "OBJETOS CREADOS: $contador";
echo '<br>';

// INCLUYE EL ARCHIVO QUE CONTIENE LA CLASE 'Desktop'
require_once('Desktop.php');

// CREACIÓN DE INSTANCIAS DE 'Desktop'
$desktop1 = new Desktop('DELL', '32 GB', 'DDR4', '512 GB SSD', 'WINDOWS 11 PRO', 'MICROSOFT OFFICE', 'INTEL(R) Core(TM) I7', 5, true);
$desktop2 = new Desktop('HP', '16 GB', 'DDR5', '1 TB', 'LINUX 9', 'LIBRE OFFICE', 'AMD RYZEN 5', 6, false);

// IMPRESIÓN DE INFORMACIÓN DEL DESKTOP 1
echo '<br>';
echo '--- DESKTOPS ---' . '<br>';
echo 'INFORMACION DEL DESKTOP 1: ' . '<br>';
echo '<br>';
echo 'Fabricante: ' . $desktop1 -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $desktop1 -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $desktop1 -> get_tipo_memoria() . '<br>';
echo 'Capacidad de almacenamiento: ' . $desktop1 -> get_cap_almacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $desktop1 -> get_sistema_operativo() . '<br>';
echo 'Suite Oficina: ' . $desktop1 -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $desktop1 -> get_procesador() . '<br>';
echo 'Numero de puertos de USB: ' . $desktop1 -> get_num_puertos_usb() . '<br>';
echo '<br>';

// IMPRESIÓN DE INFORMACIÓN DEL DESKTOP 2
echo 'INFORMACION DEL DESKTOP 2: ' . '<br>';
echo '<br>';
echo 'Fabricante: ' . $desktop2 -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $desktop2 -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $desktop2 -> get_tipo_memoria() . '<br>';
echo 'Capacidad de almacenamiento: ' . $desktop2 -> get_cap_almacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $desktop2 -> get_sistema_operativo() . '<br>';
echo 'Suite Oficina: ' . $desktop2 -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $desktop2 -> get_procesador() . '<br>';
echo 'Numero de puertos de USB: ' . $desktop2 -> get_num_puertos_usb() . '<br>';
echo '<br>';

// INCLUYE EL ARCHIVO QUE CONTIENE LA CLASE 'Laptop'
require_once('Laptop.php');

// CREACIÓN DE INSTANCIAS DE 'Laptop'
$laptop1 = new Laptop('LENOVO', '16 GB', 'DDR4', '512 GB', 'WINDOWS 10', 'MICROSOFT OFFICE', 'INTEL CORE I7', 4, true, '8000 mAh');
$laptop2 = new Laptop('APPLE', '64 GB', 'DDR5', '2 TB', 'MacOS 11', 'iOS 2.0', 'M2 MAX', 3, false, '7000 mAh');

// IMPRESIÓN DE INFORMACIÓN DEL LAPTOP 1
echo '<br>';
echo '--- LAPTOPS ---' . '<br>';
echo 'INFORMACION DEL LAPTOP 1: ' . '<br>';
echo '<br>';
echo 'Fabricante: ' . $laptop1 -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $laptop1 -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $laptop1 -> get_tipo_memoria() . '<br>';
echo 'Capacidad de almacenamiento: ' . $laptop1 -> get_cap_almacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $laptop1 -> get_sistema_operativo() . '<br>';
echo 'Suite Oficina: ' . $laptop1 -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $laptop1 -> get_procesador() . '<br>';
echo 'Numero de puertos de USB: ' . $laptop1 -> get_num_puertos_usb() . '<br>';
echo '¿TACTIL?: ' . $laptop1 -> get_tactil() . '<br>';
echo 'Potencia de la bateria: ' . $laptop1 -> get_pot_bateria() . '<br>';
echo '<br>';

// IMPRESIÓN DE INFORMACIÓN DEL LAPTOP 2
echo 'INFORMACION DEL LAPTOP 2: ' . '<br>';
echo '<br>';
echo 'Fabricante: ' . $laptop2 -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $laptop2 -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $laptop2 -> get_tipo_memoria() . '<br>';
echo 'Capacidad de almacenamiento: ' . $laptop2 -> get_cap_almacenamiento() . '<br>';
echo 'Sistema Operativo: ' . $laptop2 -> get_sistema_operativo() . '<br>';
echo 'Suite Oficina: ' . $laptop2 -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $laptop2 -> get_procesador() . '<br>';
echo 'Numero de puertos de USB: ' . $laptop2 -> get_num_puertos_usb() . '<br>';
echo '¿TACTIL?: ' . $laptop2 -> get_tactil() . '<br>';
echo 'Potencia de la bateria: ' . $laptop2 -> get_pot_bateria() . '<br>';

?>
