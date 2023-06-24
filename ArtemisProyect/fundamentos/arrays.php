//! Arrays Simples
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Formulario de Registro</h2>

    <form action="arrays.php" method="POST">
        <label for="">Nombre 1:</label>
        <input type="text" id="nombre1" name="nombre1"><br>

        <label for="edad1">Edad 1:</label>
        <input type="number" id="edad1" name="edad1"><br>

        <label for="seletc1">Género 1:</label>
        <select id="seletc1" name="seletc1">
            <option value="">Seleciona un Genero</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br>

        <label for="nombre2">Nombre 2:</label>
        <input type="text" id="nombre2" name="nombre2"><br>

        <label for="edad2">Edad 2:</label>
        <input type="number" id="edad2" name="edad2"><br>

        <label for="seletc2">Género 2:</label>
        <select id="seletc2" name="seletc2">
            <option value="">Seleciona un Genero</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br>

        <label for="nombre3">Nombre 3:</label>
        <input type="text" id="nombre3" name="nombre3"><br>

        <label for="edad3">Edad 3:</label>
        <input type="number" id="edad3" name="edad3"><br>

        <label for="seletc3">Género 3:</label>
        <select id="seletc3" name="seletc3">
            <option value="">Seleciona un Genero</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php

if ($_POST) {
    $nombres = array();
    $edades = array();

    // Obtener los valores enviados por el formulario
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $nombre3 = $_POST['nombre3'];

    $edad1 = $_POST['edad1'];
    $edad2 = $_POST['edad2'];
    $edad3 = $_POST['edad3'];

    // Guardar los nombres y las edades en los respectivos arrays
    array_push($nombres, $nombre1, $nombre2, $nombre3);
    array_push($edades, $edad1, $edad2, $edad3);

    // Imprimir los nombres y las edades
    echo "Nombres:<br>";
    print_r($nombres);
    echo "<br><br>";

    echo "Edades:<br>";
    print_r($edades);
    echo "<br><br>";

    // Lógica adicional

    // Contar el número de hombres y mujeres
    $numeroHombres = 0;
    $numeroMujeres = 0;

    $genero1 = $_POST['seletc1'];
    $genero2 = $_POST['seletc2'];
    $genero3 = $_POST['seletc3'];

    if ($genero1 == "Masculino") {
        $numeroHombres++;
    } else if ($genero1 == "Femenino") {
        $numeroMujeres++;
    }

    if ($genero2 == "Masculino") {
        $numeroHombres++;
    } else if ($genero2 == "Femenino") {
        $numeroMujeres++;
    }

    if ($genero3 == "Masculino") {
        $numeroHombres++;
    } else if ($genero3 == "Femenino") {
        $numeroMujeres++;
    }

    echo "Número total de hombres: $numeroHombres<br>";
    echo "Número total de mujeres: $numeroMujeres<br>";

    // Obtener la persona con mayor y menor edad
    $mayorEdad = max($edades);
    $menorEdad = min($edades);

    $posicionMayor = array_search($mayorEdad, $edades);
    $posicionMenor = array_search($menorEdad, $edades);

    $nombreMayor = $nombres[$posicionMayor];
    $nombreMenor = $nombres[$posicionMenor];

    echo "La persona con mayor edad es $nombreMayor, con $mayorEdad años.<br>";
    echo "La persona con menor edad es $nombreMenor, con $menorEdad años.<br>";
}

?>
