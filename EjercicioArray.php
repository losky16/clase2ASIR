<?php

#recogida de datos

$array=$_POST["array"];
$Entrada1=$array["Entrada 1"];
$Entrada1=$array["Entrada 2"];
$Entrada1=$array["Entrada 3"];
$Entrada1=$array["Entrada 4"];
$Entrada1=$array["Entrada 5"];



$select=$_POST["Herramientas"];



function quitar($array){

    array_shift($array);
    print_r ($array);


}

function quitar_elemento($array){

    array_pop($array);
    print_r ($array);

}

function ordenar($array){
    
    array_reverse($array);
    print_r ($array);

}

function divide($array){

    array_chunk($array,2);
    print_r ($array);

}






switch ($select) {
    case 'merge':
        quitar($array);
        break;
    case 'diff':
        quitar_elemento($array);
        break;
    case 'sort':
        ordenar($array);
        break;
    case 'INF':
        divide ($array);
        break;
   

    
    default:
        # code...
        break;
}













?>