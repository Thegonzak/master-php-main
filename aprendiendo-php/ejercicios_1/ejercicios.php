<?php

//Ejercicio 1
echo"<p>
Ejercicio 1:<br/>
Crear dos variables 'pais' y 'continente' y mostrar su valor por pantalla y
 poner en un comentario que tipo de dato tiene.</p>";


$pais="Ecuador";
$continente="America del Sur";

echo "El Pais es: $pais y su continente es $continente.";
echo"<br/>";
var_dump($continente, $pais);

//Ejercicio 2
echo"<hr/>";
echo"<p>
Ejercicio 2:<br/>
Sacar todos los numeros pares del 1 al 100.</p>";
$numero=2;
for($contador = 0; $contador <= 50; $contador++){
    
    $resultado= $contador*$numero;
    echo "$resultado";
    if($resultado != 100){
       echo", ";
    }else{
        echo".";
    }
}
//Ejercicio 3
echo"<hr/>";
echo"<p>
Ejercicio 3:<br/>
Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo)
 de los 40 primeros numeros naturales.</p>";

 $contador =0;
 $resultado=0;

 while ($contador <= 40){
   
    $resultado=$contador*$contador;
    echo "$resultado";
    $contador ++;
    if($resultado != 1600){
        echo", ";
     }else{
         echo".";
     }
 }

 //Ejercicio 4
echo"<hr/>";
echo"<p>
Ejercicio 4:<br/>
Recoger dos numeros por la URL(GET) y hacer todas las operaciones basicas de una calculadora
 suma, resta, multiplicación y división.</p>";

if(isset($_GET['numero_1']) && isset($_GET['numero_2'])){
 $numero_1 = $_GET['numero_1'];
 $numero_2 = $_GET['numero_2'];

$suma = $numero_1 + $numero_2;
$resta = $numero_1 - $numero_2;
$multiplicacion = $numero_1 * $numero_2;
$division = $numero_1 / $numero_2;

echo "La suma de $numero_1 + $numero_2 es $suma<br/>";
echo "La resta de $numero_1 - $numero_2 es $resta<br/>";
echo "La multiplicación de $numero_1 * $numero_2 es $multiplicacion<br/>";
echo "La división de $numero_1 / $numero_2 es $division<br/>";
}else{
    
echo "Introduce los valores por la url";
}

//Ejercicio 5
echo"<hr/>";
echo"<p>
Ejercicio 5:<br/>
Hacer un programa que muestre todos los numeros entre dos numeros
que nos lleguen por la url</p>";
if(isset($_GET['numero_1']) && isset($_GET['numero_2'])){
if($numero_1 < $numero_2){
    for ($i = $numero_1; $i <=$numero_2; $i++){

        echo "$i, ";

    }

}else{
    echo "El numero 1 debe ser menor al numero 2.";
}}else{
    
    echo "Introduce los valores por la url";
    }

?>