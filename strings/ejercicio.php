<?php
#lucia vera perez
#24-10-2024
#ejercico 1
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
#Muestre un mensaje de bienvenida "Bienvenido nombre apellido"
echo "Bienvenido: " . " ". $nombre . " " . $apellido . "<br>";
#Escriba el nombre y el apellido al revés
echo "Tu nombre al reves es" . " " . strrev($nombre) . " y tu apellido " . " " . strrev($apellido) . " los dos al reves sería " . " " . strrev($nombre . $apellido). "<br>";
#Cuente las letras del nombre, del apellido y las totales.
echo "Tu nombre tiene " . strlen($nombre) . " letras, tu apellido " . strlen($apellido) . " y los dos juntos tienen " . strlen($nombre . $apellido) . " letras <br>";
#Escriba nombre y apellido en mayúsculas
echo "Tu nombre en mayusculas es " . strtoupper($nombre) . " y tu apellido en mayusculas es " . strtoupper($apellido) . " y los dos " . strtoupper($nombre . $apellido) . "<br>";
#Imprimir el primer y ultimo carácter del nombre y el apellido
echo " el primer caracter de tu nombre es: " . " " . substr($nombre,0,1) . " y el ultimo: " . " " . substr($nombre, -1) . " la primera letra de tu apellido es: " . substr($apellido,0,1) . " y la ultima es: " . substr($apellido, -1) . "<br>";
#Cambiar todas las vocales del nombre y el apellido por la u
echo "si cambio las vocales por u mi nombre sería " . str_replace(["a","e","i","o"], "u", $nombre) . "<br>";

#ejercicio 2
#Añade al formulario tres campos para introducir dos números. El programa procesar debe mostrar la suma de los números, la diferencia, el cociente y el producto.
  // Realizar las operaciones matemáticas
$suma = $n1 + $n2;
$diferencia = $n1 - $n2;
$producto = $n1 * $n2;
$division = ($n2 != 0) ? $n1 / $n2 : "No se puede dividir entre 0";

  // Mostrar los resultados
echo " Resultados: <br>";
echo " Suma: $suma ";
echo " Diferencia: $diferencia ";
echo " Producto: $producto ";
echo " Cociente: $division ";

}
