<form method="POST" action="notas.php">
    <label for="numero">Número:</label>
    <input type="number" name="numero" required><br>

    <input type="submit" value="Verificar">
</form>

<?php

    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "Es un número par. ";
    } else {
        echo "Es un número impar. ";
    }

    if ($numero > 10) {
        echo "Además, es mayor que 10.";
    } else {
        echo "Además, no es mayor que 10.";
    }

?>