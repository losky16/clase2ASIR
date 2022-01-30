<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
function mediaPasajeros($VueloNumeroPasajeros,$fabricante){
            
            $totalPasajeros=0;
            $totalVuelos=0;
        foreach ($VueloNumeroPasajeros as $pasajerito) {
            
           

            if ($pasajerito["Vuelo"]==$fabricante) {
            
            $totalPasajeros= $totalPasajeros + $pasajerito["Pasajeros"];
            
               
               $totalVuelos=$totalVuelos+1;
               
            
            }
        }
        echo "<br>";
        echo " Media Pasajeros: ".$totalPasajeros/$totalVuelos;
        
        




}














?>