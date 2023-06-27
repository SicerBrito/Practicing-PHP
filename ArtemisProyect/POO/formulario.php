<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de selección de productos</title>
</head>
<body>

    <h1>Formulario de selección de productos</h1>

    <form action="facturacion.php" method="POST">
        <label for="">Selecciona los productos:</label><br>
        <input type="checkbox" name="productos[]" value="cocacola"> Coca Cola - $5000<br>
        <input type="checkbox" name="productos[]" value="papas"> Papas - $2500<br>
        <input type="checkbox" name="productos[]" value="cheetos"> Cheetos - $1500<br>
        <input type="submit" value="Agregar productos" name="submit">
    </form>

</body>
</html>
