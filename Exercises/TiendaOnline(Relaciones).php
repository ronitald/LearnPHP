<?php
//###############################################
// CLASE PRODUCTO PARA REPRESENTAR UN PRODUCTO EN LA TIENDA
class Producto {
    private $nombreProducto;
    private $precio;

    // CONSTRUCTOR PARA INICIALIZAR EL NOMBRE Y PRECIO DEL PRODUCTO
    public function __construct($nombreProducto, $precio) {
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
    }

    // MÉTODOS GET PARA OBTENER EL NOMBRE Y PRECIO DEL PRODUCTO
    public function getNombreProducto() {
        return $this->nombreProducto;
    }

    public function getPrecio() {
        return $this->precio;
    }
}

//#############################################
// CLASE CARRO DE COMPRAS PARA ADMINISTRAR LOS PRODUCTOS SELECCIONADOS
class CarroCompra {
    private $productos = array();

    // MÉTODO PARA AGREGAR UN PRODUCTO AL CARRO
    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }

    // MÉTODO PARA OBTENER EL SUBTOTAL DEL CARRO SUMANDO LOS PRECIOS DE LOS PRODUCTOS
    public function getSubtotal() {
        $subtotal = 0;
        foreach ($this->productos as $producto) {
            $subtotal += $producto->getPrecio();
        }
        return $subtotal;
    }

    // MÉTODO PARA VACIAR EL CARRO DE COMPRAS
    public function vaciarCarro() {
        $this->productos = array();
    }
}

//#############################################
// CLASE PEDIDO QUE REPRESENTA UN PEDIDO DE PRODUCTOS
class Pedido {
    private $nombreCliente;
    private $correoCliente;
    private $direccionCliente;
    private $carro;

    // MÉTODO CONSTRUCTOR PARA INICIALIZAR LOS DATOS DEL PEDIDO Y EL CARRO ASOCIADO
    public function __construct($nombreCliente, $correoCliente, $direccionCliente, CarroCompra $carro) {
        $this->nombreCliente = $nombreCliente;
        $this->correoCliente = $correoCliente;
        $this->direccionCliente = $direccionCliente;
        $this->carro = $carro;
    }

    // MÉTODO PARA OBTENER EL TOTAL DEL PEDIDO LLAMANDO AL MÉTODO GETSUBTOTAL DEL CARRO
    public function getTotal() {
        return $this->carro->getSubtotal();
    }

    // MÉTODO PARA PROCESAR EL PEDIDO: SIMULA CONECTAR A LA BASE DE DATOS, ENVIAR EMAIL Y ACTUALIZAR INVENTARIO
    public function procesarPedido() {
        // Conectar a la base de datos y guardar el pedido
        // Enviar un correo electrónico de confirmación al cliente
        // Actualizar el inventario de productos en la tienda
        $this->carro->vaciarCarro(); // Vaciar el carro después de procesar el pedido
        return true; // Retorna true para indicar que el pedido se procesó correctamente
    }
}

//#######################################
// EJEMPLO DE USO
$producto1 = new Producto("Camiseta", 120);
$producto2 = new Producto("Pantalón", 140);
$producto3 = new Producto("Tennis", 350);
$producto4 = new Producto("Calcetines", 80);
$producto5 = new Producto("Boxer", 50);

$carro1 = new CarroCompra();
$carro1->agregarProducto($producto1);
$carro1->agregarProducto($producto2);
$carro1->agregarProducto($producto4);

$pedido1 = new Pedido("Juan Pérez", "juanperez@example.com", "Calle 123", $carro1);

// IMPRIMIR LOS PRODUCTOS A COMPRAR
$lista_productos = array($producto1, $producto2, $producto3, $producto4, $producto5);
$productos = "Los productos a comprar son: ";

foreach ($lista_productos as $producto) {
    $productos .= $producto->getNombreProducto() . ', ';
}
$productos = rtrim($productos, ', ');
echo $productos;
echo '<br>';

// IMPRIMIR EL TOTAL DEL PEDIDO
echo 'Total del pedido: ' . $pedido1->getTotal() . '<br>';                               

// PROCESAR EL PEDIDO Y MOSTRAR UN MENSAJE SEGÚN EL RESULTADO
if ($pedido1->procesarPedido()) {
    echo "Gracias por su compra";
} else {
    echo "Ha ocurrido un error, por favor inténtelo de nuevo";
}

?>
