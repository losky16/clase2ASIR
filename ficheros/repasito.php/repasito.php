<?php
#CONSTATES

$pi=pi();
echo "Numero PI:".$pi;

//Es una forma de proteger datos reservados
define("GRAVEDAD",9.8); 

define("GRAVEDAD",9.8); 
echo "Constante de la Gravedad:".GRAVEDAD;

//agrupacion de valores=ARRAY

$numero=array(2,4,8,10,12,GRAVEDAD);



/*
$manule="Cafelaso de arvellana";

$miguel=0;

$pako=true;

$dato1=$_POST["datito1"];
$dato2=$_POST["datito2"];
#CODICCIONALES

if (condition) {
    # code...
}else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

#BUCLES

while ($a <= 10) {
    # code...
}
 for ($i=0; $i < ; $i++) { 
     # code...
 }

?>