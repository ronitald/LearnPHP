<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <!-- Campos de entrada para los operandos -->
        <input type="text" name="operador1" value="" placeholder="Operador 1">
        <input type="text" name="operador2" value="" placeholder="Operador 2">
        
        <!-- Botón de envío del formulario -->
        <input type="submit" value="Enviar" name="enviar">
        
        <!-- Selección de la operación -->
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
    </form>
</body>
</html>
