<?php
#lucia vera perez
#11-11-2024
#ejercico 5 bloque condicionales

#Crea un programa con una variable booleana $lluvia y una variable $temperatura a las que darás valor en el código. El programa debe dar los siguientes mensajes. 
#Primero genero las variables y les doy valores
 $lluvia=false;
 $temperatura=8;
#Imprimir los valores
 echo"Temperatura = $temperatura <br>";
 echo "Hoy ". ($lluvia ? 'llueve ' : 'no llueve ') . "<br>";
#Los comparamos
 if($temperatura<=-10 ||$temperatura>=40){
     echo "La temperatura es extrema, no se puede realizar la actividad <br>";
 }
 elseif($temperatura>20&&$temperatura<40){
    echo("La temperatura es $temperatura y no llueve, A la playa <br>");
 }elseif($temperatura >-10 &&$temperatura <=5){
     echo("La temperatura es $temperatura y no llueve, A esquiar <br>");
 }elseif($temperatura>5&&$temperatura<=20){
     echo("La temperatura es $temperatura y no llueve, a pasear <br>");
 }elseif($lluvia){
    echo "Aunque la temperatura no es extrema, llueve, asi que quedate en casa <br>";
}
 

?>