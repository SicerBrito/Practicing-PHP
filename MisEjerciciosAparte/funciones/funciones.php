<?php
// ! Funciones
function estudiante($nombre = '', $apellido = '', $edad = ''){
    echo "El nombre es $nombre, el apellido es $apellido y la edad es $edad" ;
};
estudiante('pedro','rodrigez',24);

echo '<br><br>';

function suma($a,$b){
    return $a + $b;
};
$resultado = suma(500,500);
echo $resultado;
?>