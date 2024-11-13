<?php
#lucia vera perez
#13-11-2024
#ejercico 1 bloque loops
#Crea un programa en php que genere 20 números aleatorios entre 1 y 6 y los muestre por pantalla.
#Para qu ese repita 20 veces

for($contador=1;$contador<=20;$contador++){
    echo " $contador : el numero generado es " . rand(1,6) . "<br>";
} 
?>