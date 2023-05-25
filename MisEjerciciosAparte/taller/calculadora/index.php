

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="shortcut icon" href="calculadora.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once 'data.php'; ?>

    <form class="caja" action="index.php" method="get">
        <h1 class="resultado">Calculadora con PHP</h1>
        
        <label class="datos" for="datos">Primer Numero</label>
        <input type="text" name="num1" value="" placeholder="Ingresa un numero">

        <label class="datos" for="datos">Segundo Numero</label>
        <input type="text" name="num2" value="" placeholder="Ingresa un numero">

        <div class="resultado">
            <output class="resultado" type="numero" name="numero"><?php echo $resultado; ?></output>
        </div>

        <button class="button" type="submit" name="suma" value="">Sumar</button>
        <button class="button" type="submit" name="resta" value="">Restar</button>
        <button class="button" type="submit" name="multiplicacion" value="">Multiplicar</button>
        <button class="button" type="submit" name="division" value="">Dividir</button>
        <button class="button" type="submit" name="modulo" value="">Modular</button>

    </form>
</body>
</html>

