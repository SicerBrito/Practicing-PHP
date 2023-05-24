<?php
// ! Funciones definidas

$amigos = array ('juan<br>','juanita<br>','pedro<br>','alejandro<br>','cristian<br>','clara<br>','mercedes<br>',);
$amigosNoTanQueridos = array ('cachumbo<br>','benito<br>','zoronga<br>','melciades<br>');


print_r($amigos);
echo ('<br><br>');
print_r($amigosNoTanQueridos);
echo ('<br><br>');


// TODO: Dividir arrays en chunks y elejes cuantos elementos vas a tener en cada uno.
$funcion1 = array_chunk($amigos, 2);
print_r ($funcion1);
echo ('<br><br>');


// TODO: Elimina la cantidad de elementos que le estas pidiendo, empezando desde el primer elemento.
$funcion2 = array_slice($amigos,4);
print_r ($funcion2);
echo ('<br><br>');


// TODO: Une dos o mas arrays.
$funcion3 = array_merge($amigos,$amigosNoTanQueridos);
print_r ($funcion3);
echo ('<br><br>');


// TODO: Los comente porque no podia continuar con ellos activos.
    /* // TODO: Sacar el ultimo elemento de un array.
    $funcion4 = array_pop($amigos);
    print_r ($funcion4);
    echo ('<br><br>'); */


    /* // TODO: Elimina el ultimo elemento de un array (En este caso me esta borrando los dos ultimos elementos no se porque).
    array_pop($amigos);
    print_r ($amigos);
    echo ('<br><br>'); */


// TODO: Busca un elemento dentro de un array da como resultado la prosicion del elemento.
$funcion5 = array_search('mercedes<br>',$amigos);
print_r ($funcion5);
echo ('<br><br>');


// TODO: Invierte el orden del array.
$funcion6 = array_reverse($amigos);
print_r ($funcion6);
echo ('<br><br>');
?>