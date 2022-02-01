<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];
//$fabricante2 = $_POST["operador1"];

//if($fabricante && !$fabricante2){
    // Aqui se inicializa las funciones
    buscarFabricante($vueloFabricante, $fabricante);
    mediaPasajeros($VueloNumeroPasajeros,$fabricante);
    totalMinutosVuelos($VueloDuracionViaje,$fabricante);
    ultimosDestinos($vueloDestino,$fabricante);
    
    
    
//}



?>