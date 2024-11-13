<?php
#lucia vera perez
#13-11-2024
#ejercico 7 bloque loops
#Partiendo del programa anterior indica si el número es primo o no.

$n1=1347; 
#variable qu ealmacena el numero de divisores
$ndivisores=0; 
echo "Los divisores de ". abs($n1) . " son <br>";

for($contador=abs($n1);$contador>=1;$contador--){
    if (abs($n1)% $contador ==0){
        echo $contador!=1? "$contador, ": "$contador.<br>";
        $ndivisores ++;
    }         
}
#Si el n de divisores es 2 el numero es primo
echo "$n1 tiene $ndivisores divisores.<br>";
echo $ndivisores==2 ? "$n1 es primo <br>":"$n1 no es primo <br>";

?>