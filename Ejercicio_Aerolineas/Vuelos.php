<?php
include ("Arrays.php");
#RECOGIDA DE TADOS

$vuelo3=$_GET["avion"];

switch ($vuelo3) {
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






?>