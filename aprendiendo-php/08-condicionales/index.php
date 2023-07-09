<?php 

//CONDICIONALES

/*
 if(condicion){
    instrucciones

 }else{
    otras instrucciones
 }
 
 // OPERADORES DE COMPARACIÓN

 == IGUAL
 === IDENTICO
 !== NO IDENTICO
 <> DIFERENTE
 != DIFERENTE
 < MENOR
 > MAYOR
 >= MAYOR IGUAL
 <= MENOR IGUAL

  // OPERADORES LOGICOS

  && AND
  || OR
  ! NOT
  AND, OR

*/

// OPERADORES DE COMPARACIÓN
$color="rojo";

if($color == "rojo"){
    echo "El color es rojo";
}else{
    echo "El color no es rojo";
}
echo "<hr/>";

// OPERADORES LOGICOS

$pais = "Mexico";

if($pais =="Mexico" || $pais == "Ecuador" || $pais == "Colombia"){
    echo "En este pais se habla español";
}
echo "<hr/>";

// switch
$dia = 6;

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;  
    case 5:
        echo "Viernes";
        break; 
    default:
    echo "Es fin de semana";    
}
echo "<hr/>";

// GOTO -- PODEMOS SALTAR BLOQUES DE CODIGO
goto marca;

if($pais =="Mexico" || $pais == "Ecuador" || $pais == "Colombia"){
    echo "En este pais se habla español";
}
echo "<hr/>";

marca:
echo "Me he saltado un bloque";

?>