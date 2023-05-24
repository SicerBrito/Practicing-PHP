<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el valor del número ingresado por el usuario
    $numero = $_POST['numero'];

    if ($numero <= 10) {
        $contador = 0;
        while ($contador < $numero) {
            echo "El número $numero es menor a 10<br>";
            break;
        }
    } else {
        echo "El número $numero es mayor a 10";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de número</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<!-- <?php
$num = 1 ;
while ($num < 10) {
    echo "$num <br>";
    $num++;
}
?> -->



<!-- <?php
$number = 1;
$number2 = 1;

for ($number=0; $number <= 10; $number++) {
    echo $number;
}
echo "<br>";

for ($number2=5; $number2 < 15; $number2++) { 
    echo $number2;
}
?> -->