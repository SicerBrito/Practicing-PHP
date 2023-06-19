<form method="POST" action="notas.php">
    <label for="resistencia">Resistencia (ohmios):</label>
    <input type="number" name="resistencia" required><br>

    <label for="intensidad">Intensidad de corriente (amperios):</label>
    <input type="number" name="intensidad" required><br>

    <input type="submit" value="Calcular voltaje">
</form>


<?php

    $resistencia = $_POST['resistencia']; // en ohmios
    $intensidadCorriente = $_POST['intensidad']; // en amperios

    $voltaje = $resistencia * $intensidadCorriente;

    echo "El voltaje del circuito es: " . $voltaje . " voltios";

?>
