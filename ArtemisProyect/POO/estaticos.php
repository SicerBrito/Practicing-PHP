<?php

//! Metodos Estaticos   (Ejercicio ir a al archivo Banco)
//Los metodos estaticos son aquellos en los cuales no tengo que instaciar la clase o crear un objeto para acceder a ese recurso.
class Jugador1{
    private $goles1 = 5;

    //Modificador de acceso (public) y la palabra reservada
    public function info1(){
        return $this->goles1;  //Instacia de objeto convencional
    }

}

class Jugador2{
    private static $goles2 = 100;

    public static function info2(){
        return self::$goles2;
    }

}

$jugador = new Jugador1();
echo $jugador->info1();


echo "<br><br>";


/* $jugador = new Jugador2();
echo $jugador->info2(); */
echo Jugador2::info2();


?>