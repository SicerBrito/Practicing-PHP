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
};

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