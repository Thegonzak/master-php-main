<?php

/* BUCLES

WHILE

while (condicion){
    bloque de instrucciones
    otra instrucion
}

// DO WHILE

DO{
    bloque de instrucciones
} while(condicion);

*/

//while

$numero = 0;
echo"Ejemplo 1";
echo "<hr/>";
while($numero <= 5){
    echo "<p>$numero</p>";
    $numero++;
}
echo "<hr/>";
echo"Ejemplo 2";
echo "<hr/>";
$numero = 0;
while($numero <= 5){
    echo "$numero";
    
    if($numero !=5){
        echo ", ";
    }
    $numero++;
}
echo "<hr/>";
echo"Ejemplo 3";
echo "<hr/>";

//utilizamos isset para validar si existe ese indice
if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero =(int)$_GET['numero'];
}else{
    $numero=1;
}var_dump($numero);

echo "<hr/>";
echo"Ejemplo 4";
echo "<hr/>";

echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 1;

while ($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";    
    $contador++;
}

echo "<hr/>";
echo"Ejemplo 5 - DO WHILE";
echo "<hr/>";
// DO WHILE

$edad=17;
$contador=1;
do {
    echo "Tienes acceso al local privado $contador<br/>";
    $contador++;

}while($edad >=18 && $contador <= 10);

?>