<!-- <?php
$cursos = array('php<br>','Java<br>','html<br>','css<br>','node.js<br>','git<br>',);
echo $cursos;
echo "<br><br>";


print_r($cursos);
echo "<br><br>";


$cursos[6] = 'juan';
var_dump ($cursos);
echo "<br><br>";


echo count($cursos);
?> -->


<?php
$semana[0] = 'Lunes<br>';
$semana[1] = 'Martes<br>';
$semana[2] = 'Miercoles<br>';
$semana[3] = 'Jueves<br>';
$semana[4] = 'Viernes<br>';
$semana[5] = 'Sabado<br>';
$semana[6] = 'Domingo<br>';

// TODO: Los arrays no se pueden imprimir con echo, el resultado mostrado en pantalla es Array.
echo $semana;
echo "<br><br>";



// TODO: imprimir información detallada sobre una o más variables.
var_dump ($semana);
echo "<br><br>";



// TODO: Imprimir información sobre una variable de manera legible.
print_r ($semana);
echo "<br><br>";



// TODO: Contantar la cantidad de elementos.
echo 'La cantidad de elementos del array semana es: '.count($semana);
echo "<br><br>";



// TODO: Los días de la semana en orden.
for ($i=0; $i < count($semana); $i++) {
    echo $semana[$i];
}
echo "<br><br>";



// TODO: Buscar un elemento dentro del array dentro de un array.
for ($i=0; $i < count($semana); $i++) { 
    if ($semana[$i] == 'Jueves<br>') {
        echo 'El dia de la semana es: '.$semana[$i];
    }
}
echo "<br><br>";



// TODO: Los días de la semana en orden alfabéticamente (En forma de array).
asort($semana);
print_r ($semana);
echo "<br><br>";



// TODO: Los días de la semana en orden alfabéticamente (Solo los dias).
sort($semana);
for ($i=0; $i < count($semana); $i++) { 
    echo $semana[$i];
}
echo "<br><br>";



// TODO: Los días de la semana en orden alfabético inverso (Solo los dias).
rsort($semana);
for ($i=0; $i < count($semana); $i++) { 
    echo $semana[$i];
}
?>