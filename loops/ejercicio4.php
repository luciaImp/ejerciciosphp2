<?php
#lucia vera perez
#13-11-2024
#ejercico 4 bloque loops
#Crea un programa con una variable aleatoria entre  1 y 50 y escriba la tabla de multiplicar de dicho número.

$numero=rand(1,50); 
#para imprimir la tabla
echo "Tabla de $numero <br>";
for ($c=1;$c<=10;$c++){
    echo "$numero x $c = " . ($numero*$c) . "<br>";
    }

?>