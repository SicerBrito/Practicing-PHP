<?php
// ! Verificar si una variable esta definida.

$variable = 5;
$var1 = "Hola";
$var2 = 10;
$valor = null;


// TODO: Verificar si la variable está definida.
if (isset($variable)) {
    echo "La variable está definida.<br>";
}
echo '<br><br>';



// TODO: Verificar múltiples variables a la vez.
if (isset($var1, $var2)) {
    echo "Ambas variables están definidas.<br>";
}
echo '<br><br>';



// TODO: Verificar una variable y mostrar un mensaje en función de su estado.
if (isset($valor)) {
    echo "La variable tiene un valor asignado.<br>";
} else {
    echo "La variable no tiene un valor asignado.<br>";
}
?>