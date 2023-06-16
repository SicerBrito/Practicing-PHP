<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <title>GET AND POST</title>

</head>

<body>

    //**  Formulario1
    <form action="GET_POST.php" method="get">
        <h2>Registrarse utilizando el metodo GET</h2>
        <label for="">User GET</label>
        <input type="text" name="user1" required>
        <label for="">Password GET</label>
        <input type="password" name="password1" required>
        <input type="submit" value="send">
    </form> <br>

    <?php

    //Si llegaron datos via get imprimalos. ($_SERVER["REQUEST_METHOD"] === "GET" Es una buena practica.)
    if ($_SERVER["REQUEST_METHOD"] === "GET"){
        echo "{$_GET['user1']}" . "<br>{$_GET['password1']}"; 
        echo "<br><br>";
        /* El $_GET se transfiere los datos del cliente al servidor mediante URL.*/
        $traer1 = $_GET['user1']."<br>";
        $traer1 .= $_GET['password1'];
        echo $traer1;
    } else {
        echo "Todavia no ha llegado ningun dato via get.";
    };

    ?>



    //**  Formulario2
    <form action="GET_POST.php" method="post">
        <h2>Registrarse utilizando el metodo POST</h2>
        <label for="">User POST</label>
        <input type="text" name="user2" required>
        <label for="">Password POST</label>
        <input type="password" name="password2" required>
        <input type="submit" value="send">
    </form> <br>

    <?php

    //TODO: Si llegaron datos via post imprimalos.  ($_SERVER["REQUEST_METHOD"] === "POST" Es una buena practica.)
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "{$_POST['user2']}" . "<br>{$_POST['password2']}"; 
        echo "<br><br>";
        // TODO: El $_POST los envia encriptados en segundo plano de manera invisible al usuario.
        $traer2 = $_POST['user2']."<br>";
        $traer2 .= $_POST['password2'];
        echo $traer2;
    } else {
        echo "Todavia no ha llegado ningun dato via post.";
    };

    ?>

</body>

</html>