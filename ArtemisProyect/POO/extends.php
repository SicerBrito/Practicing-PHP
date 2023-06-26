<?php
//Example
/*     class Banco {
        private $nombre = "Davivienda";

        public function getNombre(){
            return $this->nombre;
        }
    }
    $banco = new Banco();
    echo $banco->getNombre(); */


    //TODO: Clase padre por seguridad va a ser la que va a heredar las otras clases (Esta clase NO se puede Instaciar ni crear un objeto pero si heredar de esa clase a otras).
    abstract class Banco {

        private $nombre = "Davivienda";

        public function getNombre(){
            return $this->nombre;
        }
    }

    class Sucursal extends Banco{

        private $direccion = "Calle 55# 45-32";

        public function getDireccion(){
            return $this->direccion;
        }
    }

    $sucursal = new Sucursal();
    echo $sucursal->getNombre() . "<br>";
    echo $sucursal->getDireccion() . "<br>";


?>