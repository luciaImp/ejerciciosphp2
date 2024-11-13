<?php
#lucia vera perez
#13-11-2024
#ejercico 3 bloque loops
#Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea menor que 100.
$suma=0;echo($suma);
$nlanzamiento=0;
while($suma<=100){
    #sumo 1 al contador
    $nlanzamiento++;
    #genero el número
    $valor=rand(1,6);
    #acumulo la suma
    $suma+=$valor;
    #imprimo los resultador
    echo "He lanzado el dado $nlanzamiento veces, su valor es $valor y si le sumo el anterior es $suma <br>";  
    }

?>