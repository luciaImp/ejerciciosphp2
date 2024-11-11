<?php
#lucia vera perez
#24-10-2024
#ejercico 2 bloque condicionales
#Crea dos variables $n1 y $n2 aleatorias entre 0 y 20. el programa debe escribir los valores e indicar un mensaje $n1 es mayor que $n2, $n2 es mayor que $n1 o bien que son iguales.
$n1=rand(0,20);
$n2=rand(0,20);
echo "n1 vale $n1 <br>";
echo "n2 vale $n2 <br>";
if ($n1>$n2){
    echo "El $n1 es mayor <br>";

}elseif($n1==$n2){
    echo "Los numeros son iguales <br>";
}else{
    echo "El número $n2 es mayor <br>";
}

?>
?>

