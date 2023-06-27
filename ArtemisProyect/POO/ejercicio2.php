<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="POST">
        <label>Escribe el nombre del producto</label>
        <input type="text" name="nombre">
        <label for="">Escribe el valor</label>
        <input type="number" name="valor">
        <br>
        <!-- Agregamos checkboxes para seleccionar los productos disponibles -->
        <input type="checkbox" name="productos[]" value="cocacola"> Coca Cola
        <input type="checkbox" name="productos[]" value="papas"> Papas
        <input type="checkbox" name="productos[]" value="cheetos"> Cheetos
        <input type="submit" value="Enviar" name="enviar">
        <input type="submit" value="Reset" name="reset">
    </form>

<?php
session_start();

// Array con los productos y sus valores iniciales
$catalogo = [
    "cocacola" => 5000,
    "papas" => 2500,
    "cheetos" => 1500,
];

if (isset($_POST["enviar"])) {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $valor = $_POST["valor"];

    // Agregar el nuevo producto al catálogo
    $catalogo[$nombre] = $valor;

    // Imprimir el catálogo actualizado
    echo "Catálogo actualizado:<br>";
    print_r($catalogo);
    echo "<br>";

    if (isset($_POST["productos"])) {
        // Obtener los productos seleccionados
        $productosSeleccionados = $_POST["productos"];

        // Mostrar los productos seleccionados
        echo "Productos seleccionados:<br>";
        foreach ($productosSeleccionados as $producto) {
            echo $producto . "<br>";
        }
    }
}

echo "<br><br>";

if (isset($_POST["reset"])) {
    // Reiniciar el catálogo
    $catalogo = [];

    // Mostrar mensaje de reinicio
    echo "Catálogo reiniciado.";
}

?>
    
</body>
</html>
