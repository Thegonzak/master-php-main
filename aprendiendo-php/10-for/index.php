<?php

// BUCLE FOR

/*

for(expresion inicial, condicion, incremento contador){
    bloque de instruccion
}

*/
echo "<hr/>";
echo"Ejemplo 1";
echo "<hr/>";
$resultado=0;

for($i = 0; $i <= 100; $i++){

    $resultado += $i;    
}
echo "<h1>El resultado es: $resultado</h1>";


echo "<hr/>";
echo"Ejemplo 2";
echo "<hr/>";

if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero =(int)$_GET['numero'];
}else{
    $numero=1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";  
}

echo "<hr/>";
echo"Ejemplo 3 - ESTRUCTURA BREAK";
echo "<hr/>";
// ESTRUCTURA BREAK

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

for($contador = 1; $contador <= 10; $contador++){
   if($numero==45){
    echo "No se puede mostrar estas operaciones prohibidas";
     break;

   }
    echo "$numero x $contador = ".($numero*$contador)."<br/>";  
}


?>