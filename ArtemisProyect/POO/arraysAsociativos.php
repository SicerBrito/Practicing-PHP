<?php

    //TODO: Crear array Asociativo
    $campers1 = array(
        //El primer valor le denomidamos clave o key y al segundo le denominamos valor
        "pedro" => "javascript",
        "ana" => "PHP",
        "andrea" => "c#",
    );

   $campers2 = [
        "juan" => "CSS",
        "jenny" => "Html",
        "pedro" => "bootstrap",   
    ];
    //Mostrar todo el array
    print_r($campers1);
    echo "<br><br>";
    var_dump($campers2);
    echo "<br><br>";

    //Mostrar valor expesifico
    echo "La camper ana esta especializada en " . $campers1['ana'];
    echo "<br><br>";

    //Agragar una clave o valor nuevo
    $campers1["joaquin"] = "dartk";
    print_r($campers1);
    echo "<br><br>";

    //Modificar un valor
    $campers1["ana"] = "otra vaina";
    echo "La camper ana esta especializada en " . $campers1['ana'];
    echo "<br><br>";

    //Eliminar una key de un array
    unset($campers1["ana"]);
    print_r($campers1);
    echo "<br><br>";

    //Interarlos foreach
    foreach ($campers1 as $key => $value) {
        echo "El camper: " . $key. " Se especializa en: " . 
        $value;
        echo "<br>";
    };
    echo "<br><br>";

    foreach ($campers1 as $value) {
        echo "Los campers se pueden especializar en: " . $value;
        echo "<br>";
    };
    echo "<br><br>";




?>