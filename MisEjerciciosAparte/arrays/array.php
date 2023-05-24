<?php
$dias = array('lunes','<br>','martes','<br>','miercoles','<br>','jueves','<br>','viernes','<br>','sabado','<br>','domingo','<br>','lunes',);
$estudiantes = array('nombre' => 'pedro<br>', 'apellido' => 'De la Cruz<br>', 'edad' => 25);

echo $dias;
echo '<br><br>';

var_dump ($dias);
echo '<br><br>';

print_r($dias);

echo $estudiantes;
echo '<br><br>';

var_dump ($estudiantes);
echo '<br><br>';

print_r ($estudiantes);
echo '<br><br>';

echo 'Es un placer mi nombre es '.$estudiantes['nombre'];
?>