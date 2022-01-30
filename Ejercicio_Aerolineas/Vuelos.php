<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
totalMinutosVuelos($VueloDuracionViaje,$fabricante);

/**
 * funcion que calcula el total de minutos de  vuelo de una compañia
 * @param VueloDuracionViaje contiene el array con los datos
 * @param fabricante  compañia que a selecionado el usuario
 */
function totalMinutosVuelos($VueloDuracionViaje,$fabricante){
    // declaramos las variables a usar
    $totalTiempo=0; // almacena el total del tiempo de vuelo
    echo "<br>";
    
    //recorremos el array VueloDuracionViaje
    foreach ($VueloDuracionViaje as $DuracionViajecito) {
        //comprobamos que el nombre del vuelo sea el selecionado por el usuaario
        if ($fabricante==$DuracionViajecito["Nombre"]) {
            
            //acumulamos el tiempo de vuelo en la variable
            $totalTiempo= $totalTiempo + $DuracionViajecito["Tiempo"];
            
        }
    }
    echo "Minutos totales de vuelo: ". $totalTiempo ." minutos";
}           













?>