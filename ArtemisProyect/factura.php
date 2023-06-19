<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/PHP-logo.svg.png">
    <title>Factura</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/factura.js" defer></script>
</head>

<body>

    <form action="factura.php" method="post">

        <h2>Factura</h2>

        <label for="nombre">Ingrese su nombre completo:</label>
        <input type="text" name="nombre" id="nombre" required value="<?php echo htmlspecialchars($nombre); ?>"> <br>

        <label for="tarjeta">Tarjeta de Crédito:</label>
        <input type="text" name="tarjeta" id="tarjeta" required value="<?php echo htmlspecialchars($tarjeta); ?>"> <br>
        
        <label for="password">Contraseña de la tarjeta:</label>
        <input type="password" name="password" id="password" required>

        <label for="opt">Criptomonedas</label>
        <select name="opt" id="opt" required>
            <option value="">Seleccione una criptomoneda</option>
            <option value="BTC" <?php if ($selectedCriptomoneda === 'BTC') echo 'selected'; ?>>Bitcoin</option>
            <option value="ETH" <?php if ($selectedCriptomoneda === 'ETH') echo 'selected'; ?>>Ethereum</option>
            <option value="BNB" <?php if ($selectedCriptomoneda === 'BNB') echo 'selected'; ?>>Binance Coin</option>
            <option value="XRP" <?php if ($selectedCriptomoneda === 'XRP') echo 'selected'; ?>>Ripple</option>
            <option value="ADA" <?php if ($selectedCriptomoneda === 'ADA') echo 'selected'; ?>>Cardano</option>
            <option value="DOGE" <?php if ($selectedCriptomoneda === 'DOGE') echo 'selected'; ?>>Dogecoin</option>
        </select>

        <label for="valor">Valor:
            <span id="valor"><?php echo $precio; ?></span>
        </label> <br>

        <label for="cantidad">Cantidad a comprar</label>
        <input type="number" name="cantidad" id="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>" required>

        <label for="total">Total:
            <span id="total"><?php echo $total; ?></span>
        </label> <br>

        <input type="submit" value="Comprar">

    </form>

    <?php
    include "./conexion/conexion.php";
    
    $nombre = $_POST['nombre'] ?? '';
    $tarjeta = $_POST['tarjeta'] ?? '';
    $selectedCriptomoneda = $_POST['opt'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';

    $criptomonedas = array(
        'BTC' => 1000,
        'ETH' => 2000,
        'BNB' => 3000,
        'XRP' => 4000,
        'ADA' => 5000,
        'DOGE' => 6000
    );

    $precio = isset($criptomonedas[$selectedCriptomoneda]) ? $criptomonedas[$selectedCriptomoneda] : 0;
    $total = $precio * $cantidad;
    ?>

    <?php if ($selectedCriptomoneda && $cantidad && $nombre && $tarjeta) : ?>
        <div class="factura">
            <h2>Factura</h2>
            <p>Nombre: <?php echo htmlspecialchars($nombre); ?></p>
            <p>Tarjeta de Crédito: <?php echo htmlspecialchars($tarjeta); ?></p>
            <p>Criptomoneda: <?php echo $selectedCriptomoneda; ?></p>
            <p>Cantidad: <?php echo $cantidad; ?></p>
            <p>Precio: <?php echo $precio; ?></p>
            <p>Total: <?php echo $total; ?></p>
        </div>
    <?php endif; ?>

</body>

</html>
