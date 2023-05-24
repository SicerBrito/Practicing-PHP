<?php
session_start();

// Verificar si se ha enviado el formulario
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    
    // Obtener el array existente de nombres o crear uno nuevo si no existe
    $nombres = isset($_SESSION['nombres']) ? $_SESSION['nombres'] : array();
    
    // Agregar el nuevo nombre al array
    $nombres[] = $nombre;
    
    // Guardar el array actualizado en la sesión
    $_SESSION['nombres'] = $nombres;
}

// Mostrar los nombres almacenados en el array
if (isset($_SESSION['nombres'])) {
    echo "Nombres registrados:<br>";
    foreach ($_SESSION['nombres'] as $nombre) {
        echo $nombre . "<br>";  
    }
}
?>
<?php
$nombre = $_GET['nombre'];
echo "El nombre es: $nombre";
?>