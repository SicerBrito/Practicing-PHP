<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Atletas</title>
</head>
<body>
    <form method="POST">
        <label for="cantidad">Digite la cantidad de atletas que desea registrar:</label>
        <input type="number" name="cantidad" id="cantidad">
        <input type="submit" value="Registrar">
    </form>

    <?php
        if(isset($_POST['cantidad'])){
            $cantidad = $_POST['cantidad'];
            $atletas = array();

            echo '<form method="POST">';
            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<h2>Atleta {$i}</h2>";
                echo "<label for='nombre{$i}'>Nombre:</label>";
                echo "<input type='text' name='nombre{$i}' id='nombre{$i}'><br>";
                echo "<label for='salto{$i}'>Salto vertical (metros):</label>";
                echo "<input type='number' step='any' name='salto{$i}' id='salto{$i}'><br>";
            }
            echo '<input type="submit" value="Calcular">';
            echo '</form>';

            if(isset($_POST["nombre1"])){
                $mejorSalto = 0;
                $mejorAtleta = '';

                for ($i = 1; $i <= $cantidad; $i++) {
                    $nombre = $_POST["nombre{$i}"];
                    $salto = floatval($_POST["salto{$i}"]);
                    $atletas[$nombre] = $salto;

                    if ($salto > $mejorSalto) {
                        $mejorSalto = $salto;
                        $mejorAtleta = $nombre;
                    }
                }

                echo "<h2>Resultado:</h2>";
                echo "El atleta con el mejor salto vertical es: " . $mejorAtleta . "<br>";
                if ($mejorSalto > 5) {
                    echo "¡Ha roto el récord mundial con un salto de {$mejorSalto} metros!";
                } else {
                    echo "Su mejor salto fue de {$mejorSalto} metros.";
                }
            }
        }
    ?>  
</body>
</html>
