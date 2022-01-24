<?php

#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños

include("Arrays.php");

function Fabricante ($select,$VueloFabricante){

foreach ($VueloFabricante as  $fabricantito){
    $Fabricante=$fabricantito["Fabricante"];
    $select=$fabricantito["Vuelo"];
   
    echo "El fabricnte del avion es:".$Fabricante;
    
}
    
}


?>