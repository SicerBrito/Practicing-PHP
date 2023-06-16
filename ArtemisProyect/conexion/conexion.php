<?php

$servername = "localhost";
$username = "campus";
$password = "campus2023";
$dbname = "factura";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'] ?? '';
$tarjeta = $_POST['tarjeta'] ?? '';
$selectedCriptomoneda = $_POST['opt'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';

$criptomonedas = array(
    'BTC' => 1000,
    'ETH' => 2000,
    'BNB' => 3000,
    'XRP' => 4000,
    'ADA' => 5000,
    'DOGE' => 6000
);

$precio = isset($criptomonedas[$selectedCriptomoneda]) ? $criptomonedas[$selectedCriptomoneda] : 0;
$total = $precio * $cantidad;

// Insertar los datos en la base de datos
$sql = "INSERT INTO facturas (nombre, tarjeta, criptomoneda, cantidad, precio, total) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssdd", $nombre, $tarjeta, $selectedCriptomoneda, $cantidad, $precio, $total);

if ($stmt->execute()) {
    // Los datos se insertaron correctamente
    echo "Factura guardada en la base de datos.";
} else {
    // Hubo un error al insertar los datos
    echo "Error al guardar la factura en la base de datos: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
