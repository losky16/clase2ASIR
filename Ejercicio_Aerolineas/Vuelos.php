<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
totalMinutosVuelos($VueloDuracionViaje,$fabricante);


function totalMinutosVuelos($VueloDuracionViaje,$fabricante){
        $totalTiempo=0;
        echo "<br>";
        

        foreach ($VueloDuracionViaje as $DuracionViajecito) {
                
                
                if ($fabricante==$DuracionViajecito["Nombre"]) {
                    echo "<br>";
                    
                    $totalTiempo= $totalTiempo + $DuracionViajecito["Tiempo"];
                    
                }





        }
        echo $totalTiempo;
}           













?>