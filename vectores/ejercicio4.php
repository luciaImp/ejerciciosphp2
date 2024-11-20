<?php
#lucia vera perez
#13-11-2024
#ejercico 4 bloque vectores
#Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 colores. Borra el segundo color del array y muestra el array actualizado.
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
        #creo el array
        $colores=["amarillo","verde","morado","rojo","azul"];
        #lo muestro
        print_r($colores);
        #borro el segundo elelemento
        unset($colores[1]);
        #muestro el array
        echo "<br>Elemento borrado con unset()<br> ";
        print_r($colores);
        #reordeno indices
        echo "<br>reordeno índices<br> ";
        $colores=array_values($colores);
        print_r($colores);
        #creo el array de nuevo
        echo "<br>Regenero el array<br> ";
        $colores=["rojo","verde","azul","amarilo","rosa"];
        #lo muestro
        print_r($colores);
        #borrar con splice()
        array_splice($colores,1,1);
        echo "<br>Borrar elemento con array_splice()<br> ";
        print_r($colores);


    ?>
</body>
</html>