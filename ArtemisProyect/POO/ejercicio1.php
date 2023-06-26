<?php
class Producto{
    private $nombreProducto;
    private $precio;
    private $categorias;
    private $tamaño;
    private $color;
    private $garantia;
    private $calidad;

    //TODO: public function __construct($nombreProducto, $precio, $categorias, $tamaño, $color, $garantia, $calidad)
    public function __construct(){
        $this-> nombreProducto;
        $this-> precio;
        $this-> categorias;
        $this-> tamaño;
        $this-> color;
        $this-> garantia;
        $this-> calidad;
    }

    //GETTERS
    public function getNombreProducto(){
        return $this->nombreProducto;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getCategorias(){
        return $this->categorias;
    }

    public function getTamaño(){
        return $this->tamaño;
    }

    public function getColor(){
        return $this->color;
    }

    public function getGarantia(){
        return $this->garantia;
    }

    public function getCalidad(){
        return $this->calidad;
    }

    //SETTERS
    public function setNombreProducto($nombreProducto){
        $this->nombreProducto = $nombreProducto;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function setCategorias($categorias){
        $this->categorias = $categorias;
    }

    public function setTamaño($tamaño){
        $this->tamaño = $tamaño;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setGarantia($garantia){
        $this->garantia = $garantia;
    }

    public function setCalidad($calidad){
        $this->calidad = $calidad;
    }

}

//TODO: $televisor = new Producto("TV Pantalla plana", "5000000 USD", "Electrodomestico", "Mediano", "Negro", "356 Dias", "Alta calidad");
$televisor = new Producto(); //Este parametro esta vacio ya que el constructor tambien lo esta, esto es un a mala practica ya que aunque el programa lo complile el codigo esta mal estructurado. Si el constructor tuviera parametros aqui tambien tendria que colocarlos (Advertencia: Esto es solo un ejemplo).
$televisor -> setNombreProducto("TV LG Pantalla plana");
$televisor -> setPrecio(5000000 . " USD");
$televisor -> setCategorias("Electrodomestico");
$televisor -> setTamaño("Mediano");
$televisor -> setColor("Negro");
$televisor -> setGarantia(356 . " Dias");
$televisor -> setCalidad("Alta calidad");

echo $televisor -> getNombreProducto() . "<br>";
echo $televisor -> getPrecio() . "<br>";
echo $televisor -> getCategorias() . "<br>";
echo $televisor -> getTamaño() . "<br>";
echo $televisor -> getColor() . "<br>";
echo $televisor -> getGarantia() . "<br>";
echo $televisor -> getCalidad() . "<br>";


echo "<br><br>";

$sancocho = new Producto();
$sancocho -> setNombreProducto("Sancocho delicioso");
$sancocho -> setPrecio(15 . " USD");
$sancocho -> setCategorias("Comida");
$sancocho -> setTamaño("Chiquito");
$sancocho -> setColor("Blanco");
$sancocho -> setGarantia("No tiene");
$sancocho -> setCalidad("Delicioso");

echo $sancocho -> getNombreProducto() . "<br>";
echo $sancocho -> getPrecio() . "<br>";
echo $sancocho -> getCategorias() . "<br>";
echo $sancocho -> getTamaño() . "<br>";
echo $sancocho -> getColor() . "<br>";
echo $sancocho -> getGarantia() . "<br>";
echo $sancocho -> getCalidad() . "<br>";

?>