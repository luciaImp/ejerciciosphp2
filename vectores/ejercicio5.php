<?php
#lucia vera perez
#13-11-2024
#ejercico 5 bloque vectores
#Ordenar un array numérico: Crea un array con los nombres de 7 deportes en desorden. Ordena el array alfabéticamente y muestra el array ordenado.
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
        $deportes=["futbol","rugby","balonmano","tenis","baloncesto","natacion","esqui"];
        echo "Deportes: <br>";
    
        #imprimir el array;
        foreach($deportes as $a){
            echo "$a <br>";
        }
        
       #ordeno el array y lo imprimo
        sort($deportes);
        echo "<br> Deportes ordenados alfabeticamente <br>";
            foreach($deportes as $a){
                echo "$a <br>";
            }
        ?>
   
</body>
</html>