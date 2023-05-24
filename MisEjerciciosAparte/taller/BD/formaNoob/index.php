<?php
$nombre = $_GET['nombre'];
echo "El nombre es: $nombre";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noob</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Cual es tu nombre: </label>
        <input type="text" name="nombre" value="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
