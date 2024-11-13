<?php
#lucia vera perez
#13-11-2024
#ejercico 2 bloque loops
#Crea un programa que simule el lanzamiento de un dado 10 veces. Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la suma acumulada.
 
$suma=0;
#lanzar 10 veces el dado
for ($nlanzamiento=1;$nlanzamiento<=10;$nlanzamiento++){
     #lanzar el dado
     $valor=rand(1,6);
     #imprimir el valor y el lanzamiento
     echo "Lanzamiento $nlanzamiento valor = $valor ";
     #acumular valor 
     $suma+=$valor; 
     echo "la suma acumulada es $suma <br>";        
}

#imprimir el resultado final
echo "<br> fin  de programa <br> 
        he lanzado el dado $numerolanzamiento veces <br>
        la suma total es $suma";

?>