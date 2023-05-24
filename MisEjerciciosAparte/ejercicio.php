<?php
$mensaje = ""; // Inicializar la variable $mensaje fuera del bloque if para evitar errores de variable indefinida

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $numero = isset($_POST["numero"]) ? (int)$_POST["numero"] : 0; // Verificar si se envió el valor y convertirlo a entero

  if ($numero >= 1 && $numero <= 100) {
    if ($numero % 2 == 0 && $numero % 3 == 0) {
      $mensaje = "El número $numero es divisible por 2 y múltiplo de 3.";
    } elseif ($numero % 2 == 0) {
      $mensaje = "El número $numero es divisible por 2, pero no es múltiplo de 3.";
    } elseif ($numero % 3 == 0) {
      $mensaje = "El número $numero no es divisible por 2, pero es múltiplo de 3.";
    } else {
      $mensaje = "El número $numero no cumple con las condiciones.";
    }
  } else {
    $mensaje = "El número $numero ingresado no está en el rango válido.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Ingresa un número entre 1 y 100:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if (!empty($mensaje)) : ?>
    <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>
