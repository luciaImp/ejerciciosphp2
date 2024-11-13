<?php
#lucia vera perez
#13-11-2024
#ejercico 6 bloque loops
#Crea un programa con una variable $n1 a la que daremos valor en el código. El programa mostrará todos los divisores de ese número.

$n1=278; 
echo "Los divisores de " . abs($n1) . " son <br>";

for($contador=abs($n1);$contador>=1;$contador--){
    if (abs($n1)% $contador ==0){
         echo $contador!=1? "$contador, ": "$contador .";
    }     
        }

?>-