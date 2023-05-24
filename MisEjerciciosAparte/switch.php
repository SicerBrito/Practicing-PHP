<?php
// ! Switch

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el valor del curso ingresado por el usuario
    $curso = $_POST['curso'];

    switch ($curso) {
        case 'php':
            echo 'lunes y martes';
            break;
        case 'JavaScript':
            echo 'miércoles';
            break;
        case 'Python':
            echo 'jueves y viernes';
            break;
        case 'Node.js':
            echo 'sábado';
            break;
        case 'C#':
            echo 'domingo';
            break;
        default:
            echo 'No existe este curso';
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de curso</title>
</head>
<body>
    <form method="post" action="">
        <label for="curso">Ingrese el nombre del curso al cual quiere asistir:</label>
        <input type="text" id="curso" name="curso">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
