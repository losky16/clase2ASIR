<?php
include ("Arrays.php");
include ("funciones_Vuelo.php");
#RECOGIDA DE TADOS

$select=$_POST["operador"];


Fabricante($VueloFabricante);
Destino($vueloDestino);
DuracionViaje(VueloDuracionViaje);
MediaPasajeros($VueloNumeroPasajeros);





/*
Esto por donde empece a meterle mano, pero se me pudrio la mano
switch ($Fabricante) {
    case 'Vueling-AE12':
        echo "Boering";
        break;
    
    case 'Volotea-EA21':
        echo"Airbus";
        break;
    case 'Iberia-WE44':
        echo "Airbus";
    case 'Ryanair-EW44':
        echo "Boering";
    case 'Vueling-ZK87':
        echo "Airbus";
    case 'Volotea-UA21':
        echo "Boering";
    case 'Iberia-WH44':
        echo "Boering";
    case 'Ryanair-ELOO':
        echo "Airbus";
    
    default:
        
        break;
}
*/
