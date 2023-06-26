<?php
//! PHP no es un lenguaje de programacion orientada a objetos sino mas bien uno que da soporte un buen soporte a la programacion orientada a objetos.

    class Camper {
        //TODO: 1. Atributos con modificadoes de acceso (Private, Public, Protected).
        //Esta es una propiedad, un atrivo de esta clase.
        //* Los atibutos se declaran Private y los metodos Public.
        //! Los atributos nunca se sebe colocar Public, en este caso solo es un ejemplo.
        private $nombre1;
        public $nombre2;  //Estas son propiedades de la clase
        public $celular;
        private $nombre3;
        private $celular2;


        //TODO: 2. Constructor  (Metodo magico)
        //* Los metodos son en si son funciones solo que al estar dentro de una clase se denomina metodos.
        //En ocaciones se inicializa con valores parametrizados
        public function __construct($nombre1,$nombre2, $celular, $nombre3, $celular2) {  //* Es ideal para inicializar valores de propiedades de los atributos de la clase (Los parametros puestos aqui son variables y no tienen nada que ver con las pripiedades de la clase vistas arriba anque se vean igaules).
            /* $this->nombre2 = 'nombre2';
            $this->celular = 320320233; */
            $this-> nombre1 = $nombre1;
            $this-> nombre2 = $nombre2;
            $this-> celular = $celular;
            $this-> nombre3 = $nombre3;
            $this-> celular2 = $celular2;
        }
        

        //TODO: 3. Metodos (Getters and Setter)
        // get --> obtener valores de atributos
        // set --> modificar valores de atributos

        //* Metodos getters
        public function getNombre(){
            return $this->nombre3;
        }
        public function getCelular(){
            return $this->celular;    
        }

        //* Metodos setters
        public function setNombre($nombre3){
            $this-> nombre3 = $nombre3;
        }

    }

    //* Instanciamos la clase Camper (los objetos son instancias de las clases).
    $camper = new Camper("edgar","juan",3223234659, "Sicer",3143323465); //El objeto o variable de instacia es $camper.
    /* echo $camper -> nombre1;  */// En este caso no se puede ya que la propiedad es privada (el objeto en este caso es $camper y camper es la propiedad).
    

    echo $camper -> nombre2 . "<br>";
    echo $camper -> celular . "<br>";

    echo "<br><br>";

    echo $camper -> getNombre() . "<br>";
    echo $camper -> getCelular() . "<br>";


    //Moficamos los valores
    $camper -> setNombre("cesar");
    echo $camper -> getNombre() . "<br>";


?>