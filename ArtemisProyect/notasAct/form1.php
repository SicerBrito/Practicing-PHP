<form method="POST" action="notas.php">
    <label for="nota1">Nota 1:</label>
    <input type="number" name="nota1" required><br>

    <label for="nota2">Nota 2:</label>
    <input type="number" name="nota2" required><br>

    <label for="nota3">Nota 3:</label>
    <input type="number" name="nota3" required><br>

    <input type="submit" value="Calcular promedio">
</form>

<?php

    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    if ($promedio <= 3.9) {
        echo "Estudie sonso HP parece que lo hubiera parido un teletubbies.";
    } else {
        echo "Becado mi hermano, usted si estudio la buena.";
    };

?>