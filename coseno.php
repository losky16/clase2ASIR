<?php


#recogida de datos
$seno=$_POST["angulo"];
$select=$_POST["operandor"]



function radianes ($r){ //pasa grados a radianes.
    $d=deg2rad($r);
    return $d;

}

function grados ($g){ //pasa radianes a grados.
    $d=rad2deg($g);
    return $d;
    }
function coseno($seno){

    
    echo sin(deg2rad(60));
    echo sin(60);
}
 switch ($select) {
     case 'seno':
         sin($seno);
        
         break;
     
     default:
         
         break;
 }

?>