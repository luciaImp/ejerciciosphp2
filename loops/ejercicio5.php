<?php
#lucia vera perez
#13-11-2024
#ejercico 5 bloque loops
#Crea un programa con una variable $n1 a la que daremos valor en el código. Escribe todos los números de $n1 al 0 contando hacia atrás. Si el número es negativo deberá cambiar su valor a positivo.

$n1=-20;
echo "Cuenta atrás: <br>";
for($contador=abs($n1);$contador>=0;$contador--){
    echo "$contador,";    
}
echo "<br> fin de la cuenta atrás <br>";

?>