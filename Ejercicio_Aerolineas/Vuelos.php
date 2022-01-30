<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
function mediaPasajeros($VueloNumeroPasajeros,$fabricante){
            echo $fabricante;
            $totalPasajeros=0;
        foreach ($VueloNumeroPasajeros as $pasajerito) {
            
           

            if ($pasajerito["Vuelo"]==$fabricante) {
            echo "<br>";
            echo $pasajerito["Pasajeros"];

            $totalPasajeros= $totalPasajeros + $pasajerito["Pasajeros"];
               echo $totalPasajeros;
               
                echo $totalPasajeros/2;


            
            }
        }





}














?>