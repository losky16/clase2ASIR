<?php

#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños

include ("Arrays.php");

function Fabricante ($VueloFabricante){

foreach ($VueloFabricante as  $fabricantito) {
    
$Fabricante=$fabricantito["Fabricante"];

$vuelo=$fabricantito["Vuelo"];
if ($vuelo==$texto){
echo "El fabricante de este avion es:".$Fabricante;
}


}



?>