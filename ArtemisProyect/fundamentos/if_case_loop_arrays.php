<?php

//1. If conditional

$salario = 900000;
$no_subsidiado = "Usted no tiene derecho al subsidio";
$subsidiado = "Usted tiene derecho al subsidio";

if ($salario >= 5000000) {
    echo $no_subsidiado;
}
elseif ($salario >= 3000000){
    echo $no_subsidiado;
}
elseif ($salario >= 1000000){
    echo $subsidiado;
}
else{
    echo $subsidiado;
}

echo "<br>";



//2. Switch

$hora = "00:00 A.M";
switch($hora){
    case "08:00 A.M";
        echo "Se acabo la clase de review";
        break;
    case "02:00 A.M";
        echo "Duerme malparido";
        break;
    case "10:00 A.M";
        echo "Se acabo la clase de ingles";
        break;
    case "12:00 A.M";
        echo "Se acabo la clase del ser";
        break;    
    case "02:00 P.M";
        echo "Bete para la casa";
        break;
    default:
        echo "Papi, descasa";
        break;
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
    <form action="if_case_loop_arrays.php" method="POST">
        <label for="">Digite el limite del contador</label>
        <input type="number" name="counter">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

//3. For - ciclo repetitivo (Repite un codigo un numero determinado de veces).
if ($_POST) {
    $counter = $_POST['counter'];
    for ($i=0; $i <= $counter; $i++) { 
        echo $i . "<br>";
    }
}
echo "<br><br><br><br>";
?>


<?php

//4. While - ciclo repetitivo (Repite un codigo mientras se cumpla una condicion).
$contador = 0;
while ($contador <=10){
    $contador++;
    echo $contador . "<br>";
}
echo "<br><br><br><br>";




//5. Array - Variable que guarda mas de un dato simultaneamente.

$comida1 = array('pan','chontaduro','avena','arroz');

echo $comida1 . "<br>";
var_dump($comida1);
echo "<br>";
print_r ($comida1);
echo "<br>";
echo $comida1[0] . "<br>";
echo $comida1[1] . "<br>";
echo $comida1[2] . "<br>";
echo $comida1[3] . "<br>";

echo "<br>";

// Foreach - ciclo repetitivo (El foreach es la forma correcta de recorrer un arreglo asociativo en PHP)
foreach ($comida1 as $i){  //La $i es de iterador (item o elemento el cual nosotros creamos para recorrer el ciclo)
    echo $i . "<br>";
}

echo "<br><br><br><br>";






$comida2 = array('chuspa','chosca','agua panela','mango');

echo $comida2 . "<br>";
var_dump($comida2);
echo "<br>";
print_r ($comida2);
echo "<br>";
echo $comida2[0] . "<br>";
echo $comida2[1] . "<br>";
echo $comida2[2] . "<br>";
echo $comida2[3] . "<br>";

echo "<br>";


array_pop($comida2); //Elimina el ultimo elemento
array_push($comida2, 'camarones'); //Añade un elemento al final
array_shift($comida2); //Elimina el primer elemento

foreach ($comida2 as $i){  
    echo $i . "<br>";
}


?>

