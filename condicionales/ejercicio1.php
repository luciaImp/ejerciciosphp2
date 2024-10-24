<?php
#lucia vera perez
#24-10-2024
#ejercico 1 bloque condicionales
#Crea una variable $numero con un valor aleatorio entre -10 y 10. El programa debe escribir un mensaje indicando si número es positivo, negativo o cero.
$numero=rand(-10,10);
echo "el numero vale $numero <br>";
if ($numero >0){
    echo "el numero es positivo";
} elseif($numero==0){
    echo "el numero es cero";
} else {
    echo "el numero es negativo";
}
?>

