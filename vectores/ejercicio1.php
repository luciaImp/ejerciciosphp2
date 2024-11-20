<?php
#lucia vera perez
#13-11-2024
#ejercico 1 bloque vectores
#Recorrer un array numérico: Crea un array que contenga los nombres de 10 frutas diferentes. Escribe un script que recorra el array y muestre cada fruta en una línea nueva.
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
        #declaro el array
         $frutas=["manzana","frambuesa","piña","pera","fresa","naranja","mora","melon","mandarina","paraguayo"];
    ?>

    <table border="1">
        
    <?php
        #lo imprimo en una tabla
        echo "<tr><th>FRUTAS</th></tr>";
        foreach($frutas as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>
    </table>
    
</body>
</html>