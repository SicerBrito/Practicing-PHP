<?php
// ! Variables scope
$edad = 54;
function FunEdad1(){
    $edad = 19;
    echo $edad;
}
FunEdad1();
echo '<br><br>';


function FunEdad2($edad){
    echo $edad;
}
FunEdad2(81);
echo '<br><br>';


function FunEdad3(){
    $edad = 34;
    return $edad;
}
echo FunEdad3();
echo '<br><br>';


function FunEdad4(){
// TODO:global $edad; Hace que todas las variables con el nombre edad tengan el valor 11 dentro o fuera de la funcion (esos valores se pueden sobrescribir y solo se vuelve global desde la linea de codigo donde esta ubicado hacia abajo).
    $edad = 11;
    echo $edad;
}
FunEdad4();
echo '<br><br>';
echo $edad;
echo '<br><br>';
?>