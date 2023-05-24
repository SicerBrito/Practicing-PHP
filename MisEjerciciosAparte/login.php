<?php
// ! No me funciona

ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    // Consulta SQL para insertar los datos en la tabla de clientes
    $sql = "INSERT INTO clientes (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if ($conn->query($sql) === true) {
        echo "Datos del cliente agregados correctamente.";
    } else {
        echo "Error al agregar los datos del cliente: " . $conn->error;
    }
}

// Consulta SQL para obtener todos los clientes de la tabla
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Acciones</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron clientes.";
}

// Obtener el ID del cliente
$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($id)) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    // Consulta SQL para actualizar los datos del cliente
    $sql = "UPDATE clientes SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Datos del cliente actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos del cliente: " . $conn->error;
    }
}

if (!empty($id)) {
    // Consulta SQL para obtener los datos del cliente con el ID especificado
    $sql = "SELECT * FROM clientes WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $correo = $row["correo"];
        $telefono = $row["telefono"];
        ?>
        <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
            Correo: <input type="email" name="correo" value="<?php echo $correo; ?>"><br>
            Teléfono: <input type="text" name="telefono" value="<?php echo $telefono; ?>"><br>
            <button type="submit">Guardar cambios</button>
        </form>
<?php
} else {
    echo "Cliente no encontrado.";
}
}

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($id)) {
    $id = $_POST["id"];

    // Consulta SQL para eliminar el cliente con el ID especificado
    $sql = "DELETE FROM clientes WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Cliente eliminado correctamente.";
    } else {
        echo "Error al eliminar el cliente: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
