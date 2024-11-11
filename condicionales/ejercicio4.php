<?php
#lucia vera perez
#11-11-2024
#ejercico 4 bloque condicionales
#Crea un programa en php que genere un numero aleatorio entre 1 y 7. El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el 7.

#Crear un número aleatorio entre 1 y 7
$numero = rand(1, 7);

#Mostrar el número generado
echo "El número es: $numero <br>";

#Para mostrar el día de la semana (como máximo hay 7 posibilidades)
switch ($numero) {
    case 1:
        echo "El día es: Lunes";
        break;
    case 2:
        echo "El día es: Martes";
        break;
    case 3:
        echo "El día es: Miércoles";
        break;
    case 4:
        echo "El día es: Jueves";
        break;
    case 5:
        echo "El día es: Viernes";
        break;
    case 6:
        echo "El día es: Sábado";
        break;
    case 7:
        echo "El día es: Domingo";
        break;
    default:
        echo "Número fuera de rango";
        break;
}
?>