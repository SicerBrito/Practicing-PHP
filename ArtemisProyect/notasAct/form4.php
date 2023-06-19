<form method="POST" action="notas.php">
    <label for="nombre1">Nombre 1:</label>
    <input type="text" name="nombre1" required><br>

    <label for="edad1">Edad 1:</label>
    <input type="number" name="edad1" required><br>

    <label for="nombre2">Nombre 2:</label>
    <input type="text" name="nombre2" required><br>

    <label for="edad2">Edad 2:</label>
    <input type="number" name="edad2" required><br>

    <label for="nombre3">Nombre 3:</label>
    <input type="text" name="nombre3" required><br>

    <label for="edad3">Edad 3:</label>
    <input type="number" name="edad3" required><br>

    <input type="submit" value="Determinar mayor edad">
</form>

<?php

    $nombre1 = $_POST['nombre1'];
    $edad1 = $_POST['edad1'];
    $nombre2 = $_POST['nombre2'];
    $edad2 = $_POST['edad2'];
    $nombre3 = $_POST['nombre3'];
    $edad3 = $_POST['edad3'];

    $nombreMayorEdad = "";

    if ($edad1 >= $edad2 && $edad1 >= $edad3) {
        $nombreMayorEdad = $nombre1;
    } elseif ($edad2 >= $edad1 && $edad2 >= $edad3) {
        $nombreMayorEdad = $nombre2;
    } else {
        $nombreMayorEdad = $nombre3;
    }

    echo "La persona con mayor edad es: {$nombreMayorEdad}";

?>