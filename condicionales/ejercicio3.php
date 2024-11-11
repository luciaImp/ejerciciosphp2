<?php
#lucia vera perez
#11-11-2024
#ejercico 3 bloque condicionales
#Crea un programa en php con tres variables aleatorias $n1,$n2,$n3. El programa mostrará sus valores y posteriormente las mostrará los números ordenados de mayor a menor.

#Crea tres números aleatorios entre 0 y 10
$n1 = rand(0, 10);
$n2 = rand(0, 10);
$n3 = rand(0, 10);

#Enseña los valores de las variables
echo "Los valores son: $n1, $n2, $n3<br>";

#Ordena los números de mayor a menor
if ($n1 >= $n2 && $n1 >= $n3) {
    if ($n2 >= $n3) {
        echo "Ordenados de mayor a menor son: $n1, $n2, $n3";
    } else {
        echo "Ordenados de mayor a menor son: $n1, $n3, $n2";
    }
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    if ($n1 >= $n3) {
        echo "Ordenados de mayor a menor son: $n2, $n1, $n3";
    } else {
        echo "Ordenados de mayor a menor son: $n2, $n3, $n1";
    }
} else {
    if ($n1 >= $n2) {
        echo "Ordenados de mayor a menor son: $n3, $n1, $n2";
    } else {
        echo "Ordenados de mayor a menor son: $n3, $n2, $n1";
    }
}
?>
?>