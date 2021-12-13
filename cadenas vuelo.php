<?php
include 'funcionCadenaVuelos.php';

#recogida de datos vuelo 1


$Codigo1=$_POST["vuelo1"];
$CiudadOrigen1=$_POST["CiudadOrigen1"];
$CiudadDestino1=$_POST["CiudadDestino1"];
$Precio1=$_POST["Precio1"];
$FechaSalida1=$_POST["FS1"];

$selector=$_POST["Herramientas"];








#recogida de datos vuelo 2
$Codigo2=$_POST["cod2"];
$CiudadOrigen2=$_POST["CiudadOrigen2"];
$CiudadDestino2=$_POST["CiudadDestino2"];
$Precio2=$_POST["Precio2"];
$FechaSalida2=$_POST["FS2"];


$vuelo1=array(4,2,3);
$vuelo2=array(4,5,6);



switch ($selector) {
    case 'merge':
        une_vuelos ($vuelo1,$vuelo2,);
        
        break;

        case 'diff':
            Dvuelos($vuelo1,$vuelo2);
            break;

            case 'sort':
                Ovuelos ($vuelo1);
                break;
            case 'INF':
                informacion ($vuelo1,$vuelo2);
                break;


    
    default:
        
        break;
}