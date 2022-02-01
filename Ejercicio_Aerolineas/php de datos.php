<?php

include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador1"];
$fabricante = $_POST["operador2"];

destinoVuelo($vueloDestino,$fabricante);
fabricanteAvion($vueloFabricante,$fabricante);
/**
 * Creamos la funcion fabricanteAvion para mostras el febricnate de cada avion
 * @param $vueloDestino nos introduce dentro del array
 * @param 
 */
function fabricanteAvion($vueloFabricante,$fabricante){
    echo "<br>";
    echo "Compañia ".$fabricante;
    //recorremos el array
    foreach ($vueloFabricante as $fabriAvion ) {
        //comprobamos que el valor del vuelo es el deseado por el usuario
        if ($fabriAvion["Vuelo"]==$fabricante) {
            
            echo "<br>";
            //mostramos el resultado
            echo $fabriAvion["Fabricante"];
        }


    }
}




?>