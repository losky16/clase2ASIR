<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
totalMinutosVuelos($VueloDuracionViaje,$fabricante);


function totalMinutosVuelos($VueloDuracionViaje,$fabricante){
        echo "<br>";
        echo $fabricante;

        foreach ($VueloDuracionViaje as $DuracionViajecito) {
                
                
                if ($fabricante==$DuracionViajecito["Nombre"]) {
                    echo "<br>";
                    echo $DuracionViajecito["Tiempo"];
                }













        }

}












?>