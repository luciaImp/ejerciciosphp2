<?php
#lucia vera perez
#13-11-2024
#ejercico 7 bloque vectores
#Añadir elementos a un array asociativo: Crea un array asociativo vacío. Añade tres pares de clave-valor (nombre de país y capital) al array y muestra el array completo.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    # Crear un array asociativo vacío
    $paises = [];

    #Añadir tres pares 
    $paises["España"] = "Madrid"; 
    $paises["Francia"] = "París"; 
    $paises["Portugal"] = "Lisboa";   

    #imprimir la capital de cada pais
    foreach ($paises as $pais => $capital) {
        echo "Pais $pais y capital $capital <br>";
    }
    ?>
</body>
</html>