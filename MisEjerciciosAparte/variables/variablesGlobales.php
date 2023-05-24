<?php
// TODO: Variables Globales

$num1 = 2;
$num2 = 8;
function sumar(){
    $GLOBALS ['sum'] = $GLOBALS['num1'] + $GLOBALS['num2']; 
}
sumar();
echo $sum;
echo '<br><br>';


// TODO: Da la direccion del archivo.
echo $_SERVER['PHP_SELF'];
echo '<br><br>';


// TODO: Da la direccion del servidor local (localhost). 
echo $_SERVER['SERVER_NAME'];
echo '<br><br>';


// TODO: Da la direccion Http. 
echo $_SERVER['HTTP_REFERER'];
echo '<br><br>';

?>