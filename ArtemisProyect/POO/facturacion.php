<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación de productos</title>
</head>
<body>

    <h1>Facturación de productos</h1>

    <form action="facturacion.php" method="POST">
        <label for="">Selecciona los productos:</label><br>
        <input type="checkbox" name="productos[]" value="cocacola"> Coca Cola - $5000<br>
        <input type="checkbox" name="productos[]" value="papas"> Papas - $2500<br>
        <input type="checkbox" name="productos[]" value="cheetos"> Cheetos - $1500<br>
        <input type="submit" value="Agregar productos" name="submit">
    </form>

<?php
session_start();

// Verificar si se ha enviado el formulario
if (isset($_POST["submit"])) {
    if (isset($_POST["productos"])) {
        $productosSeleccionados = $_POST["productos"];

        // Actualizar el arreglo de productos en la sesión
        $_SESSION["productos"] = $productosSeleccionados;
    }
}

// Calcular la suma de los precios de los productos seleccionados
$catalogo = [
    "cocacola" => 5000,
    "papas" => 2500,
    "cheetos" => 1500,
];
$sumaTotal = 0;

if (isset($_SESSION["productos"])) {
    echo "<h2>Productos seleccionados:</h2>";
    echo "<ul>";
    foreach ($_SESSION["productos"] as $producto) {
        echo "<li>" . $producto . " - $" . $catalogo[$producto] . "</li>";
        $sumaTotal += $catalogo[$producto];
    }
    echo "</ul>";
    echo "<h3>Total a pagar: $" . $sumaTotal . "</h3>";
}

?>

    <form action="facturacion.php" method="POST">
        <input type="submit" value="Borrar factura" name="borrar">
        <input type="submit" value="Editar factura" name="editar">
    </form>

<?php
// Borrar la factura
if (isset($_POST["borrar"])) {
    unset($_SESSION["productos"]);
    $sumaTotal = 0;
    echo "<p>La factura ha sido borrada.</p>";
}

// Editar la factura
if (isset($_POST["editar"])) {
    header("Location: formulario.php"); // Redirigir al formulario de selección de productos
}
?>

</body>
</html>
