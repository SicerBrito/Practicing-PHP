

<!-- Forma Larga --> <?php

    // class Empleado {

    //     protected $nombre;
    //     protected $apellido;
    //     protected $email;
    //     protected $telefono;
    //     protected $cedula;
    //     protected $departamento;

    //     public function __construct($nombre,$apellido,$email,$telefono,$cedula,$departamento){

    //         $this->nombre = $nombre;
    //         $this->apellido = $apellido;
    //         $this->email = $email;
    //         $this->telefono = $telefono;
    //         $this->cedula = $cedula;
    //         $this->departamento = $departamento;

    //     }
        

    //     public function mostrarEmpleado(){
    //         echo "Nombre: " . $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Email: " . $this->email . "<br>Telefono: " . $this->telefono . "<br>Cedula: " . $this->cedula . "<br>Departamento: " . $this->departamento;
    //     }

        
    //     //Este es simplemente codigo que estaba haciendo pero que al final no termine utilizando.
    //     // class Guardar{
    //         // public function getNombre(){
    //         //     return $this->nombre;
    //         // }

    //         // public function getApellido(){
    //         //     return $this->apellido;
    //         // }

    //         // public function getEmail(){
    //         //     return $this->email;
    //         // }

    //         // public function getTelefono(){
    //         //     return $this->telefono;
    //         // }

    //         // public function getCedula(){
    //         //     return $this->cedula;
    //         // }

    //         // public function getDepartamento(){
    //         //     return $this->departamento;
    //         // }



    //         // public function setNombre(){
    //         //     $this->nombre = $nombre;
    //         // }

    //         // public function setApellido(){
    //         //     $this->apellido = $apellido;
    //         // }

    //         // public function setEmail(){
    //         //     $this->email = $email;
    //         // }

    //         // public function setTelefono(){
    //         //     $this->telefono = $telefono;
    //         // }

    //         // public function setCedula(){
    //         //     $this->cedula = $cedula;
    //         // }

    //         // public function setDepartamento(){
    //         //     $this->departamento = $departamento;
    //         // }

    //     // }
            


        

    // }

    // class Proveedor {
    //     protected $nombre;
    //     protected $apellido;
    //     protected $email;
    //     protected $telefono;
    //     protected $empresa;

    //     public function __construct($nombre,$apellido,$email,$telefono,$empresa){
    //         $this->nombre = $nombre;
    //         $this->apellido = $apellido;
    //         $this->email = $email;
    //         $this->telefono = $telefono;
    //         $this->empresa = $empresa;
    //     }
    //     public function mostrarProveedor(){
    //         echo "Nombre: " . $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Email: " . $this->email . "<br>Telefono: " . $this->telefono . "<br>Empresa: " . $this->empresa;
    //     }
    // }

    // $empleado = new Empleado('Sebastian Daniel', 'Campos', 'sebastian@gmail.com', 3222414223, 1118800389, 'Departamento A');

    

    // $proveedor = new Proveedor('Pedro', 'Martinez', 'pedritomartinez@gmail.com', 3223453454, 'GBP');

    // print_r($empleado);
    // echo "<br><br><br>";
    // print_r($proveedor);
    // echo "<br><br><br>";
    // $empleado->mostrarEmpleado();
    // echo "<br><br><br>";
    // $proveedor->mostrarProveedor();

?>


<!-- Forma Abstract-->
<?php

abstract class Personas{

    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre,$apellido,$email,$telefono){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;

    }

    public function mostrarInformacion(){
        echo "Nombre: " . $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Email: " . $this->email . "<br>Telefono: " . $this->telefono;
    }
}

class Empleado extends Personas{

    protected $cedula;
    protected $departamento;

    public function __construct($nombre,$apellido,$email,$telefono,$cedula,$departamento){

        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->cedula = $cedula;
        $this->departamento = $departamento;

    }
    

    public function mostrarEmpleado(){
        parent::mostrarInformacion(); // Llamada al método de la clase padre.
        echo "<br>Cedula: " . $this->cedula . "<br>Departamento: " . $this->departamento;
    }

}

class Proveedor extends Personas{

    protected $empresa;

    public function __construct($nombre,$apellido,$email,$telefono,$empresa){
        
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->empresa = $empresa;
    }

    public function mostrarProveedor(){
        parent::mostrarInformacion(); // Llamada al método de la clase padre.
        echo "<br>Empresa: " . $this->empresa;
    }
}

$empleado = new Empleado('Sebastian Daniel', 'Campos', 'sebastian@gmail.com', 3222414223, 1118800389, 'Departamento A');



$proveedor = new Proveedor('Pedro', 'Martinez', 'pedritomartinez@gmail.com', 3223453454, 'GBP');

print_r($empleado);
echo "<br><br><br>";

print_r($proveedor);
echo "<br><br><br>";

$empleado->mostrarEmpleado();
echo "<br><br><br>";

$proveedor->mostrarProveedor();
echo "<br><br><br>";

?>