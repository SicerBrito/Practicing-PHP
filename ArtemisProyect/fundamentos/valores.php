<!-- 10. Desarrolle un programa cíclico que capture un dato numérico cada vez, y los vaya acumulando. El programa se detiene cuando el usuario digita un cero. El programa debe mostrar: LA SUMATORIA DE LOS VALORES, EL VALOR DEL PROMEDIO, CUÁNTOS VALORES FUERON DIGITADOS, MAYOR VALOR Y MENOR VALOR. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario final por fin vamos</title>
</head>
<body>

    <h1>Programa Final</h1>
    <form action="valores.php" method="POST">

        <p>Nota: Al ingresar números se pueden seguir añadiendo incluso tras oprimir "Agregar número", nada de lo puesto anteriormente se borrará, sin embargo, en caso de querer limpiar todos los datos, se puede oprimir el botón de "Limpiar datos" para volver a ingresar valores desde 0, sin que haya nada almacenado.</p>

        <label for="numero">Ingrese un número:</label> <input type="number" id="numero" name="numero">
        <input type="submit" name="agregar" value="Agregar número"><br><br>

        <label> Mostrar resultados de números enviados</label>
        <input type="submit" name="mostrar" value="Mostrar resultados"><br><br>

        <label>Limpiar datos:</label>
        <button type="submit" name="limpiar">Limpiar datos</button>
    </form>

</body>
</html>
<?php
session_start(); // Inicio de sesión, almacenamiento para el usuario

if (isset($_POST["agregar"])) {
    $numero = $_POST["numero"];
    if ($numero != 0) {
        // $_SESSION es una variable que se usa para almacenar datos en el servidor web (configuración, preferencias, detalles de inicio de sesión)
        $_SESSION["numeros"][] = $numero;
    }
} else if (isset($_POST["mostrar"])) {
    $numeros = $_SESSION["numeros"]; // $_SESSION["numeros"] = [10, 20]
    $suma = array_sum($numeros); // 30
    $promedio = count($numeros) > 0 ? $suma / count($numeros) : 0;
    $mayor = max($numeros); // 20
    $menor = min($numeros); // 10
    $contador = count($numeros); // 2
    echo "<h2>Resultados:</h2>";
    echo "<p>La sumatoria de los valores es: {$suma}</p>";
    echo "<p>El valor del promedio es: {$promedio}</p>";
    echo "<p>Se ingresaron {$contador} valores</p>";
    echo "<p>El mayor valor ingresado es: {$mayor}</p>";
    echo "<p>El menor valor ingresado es: {$menor}</p>";
} else if (isset($_POST["limpiar"])) {
    $_SESSION["numeros"] = []; // Reescribir nuestro array a un array vacío.
}
?>