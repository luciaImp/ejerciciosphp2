<?php
#lucia vera perez
#13-11-2024
#ejercico 6 bloque vectores
#Recorrer un array asociativo: Crea un array asociativo con los nombres y edades de 5 personas. Escribe un script que recorra el array y muestre cada nombre y su edad en una línea nueva.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    #Creo un array asociativo
    $personas = [
        "Mario" => 20,
        "Pepe" => 18,
        "Carla" => 32,
        "David" => 43,
        "Carlos" => 40
    ];

    #Imprimir el array ;
    foreach ($personas as $nombre => $edad){
        echo "$nombre tiene $edad años";
    }
    ?>

</body>

</html>