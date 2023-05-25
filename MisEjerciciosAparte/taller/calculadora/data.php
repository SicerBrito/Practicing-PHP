<?php
session_start();

$resultado = '';

// TODO: is_numeric() lo que hace esta funcion es identificar los numeros.
if (isset($_GET['num1']) && isset($_GET['num2']) && is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];

    if (isset($_GET['suma'])) {
        $resultado = $numero1 + $numero2;
    } elseif (isset($_GET['resta'])) {
        $resultado = $numero1 - $numero2;
    } elseif (isset($_GET['multiplicacion'])) {
        $resultado = $numero1 * $numero2;
    } elseif (isset($_GET['division'])) {
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            $resultado = 'Error: división entre cero.';
        }
    } elseif (isset($_GET['modulo'])) {
        if ($numero2 != 0) {
            $resultado = $numero1 % $numero2;
        } else {
            $resultado = 'Error: división entre cero.';
        }
    }
}
?>