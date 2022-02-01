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
    destinoVuelo($vueloDestino,$fabricante);
//}


/**
 * Creamos la funcion ultimosDestinos para mostranos los destino de los vuelos de la compañia
 * @param vueloDestino contiene el array 
 * @param fabricante contiene el vuelo selecionado por el usuario 
 */
function destinoVuelo($vueloDestino,$fabricante){
//Recorremos el valor del array
foreach ($vueloDestino as $destinito ) {
        //Comprobamos que el valor Vuelo se selecionado por el usuario
        if ($destinito["Vuelo"]==$fabricante) {
             echo "<br>";
             //mostramos los destino del vuelo selecionado
             
        }

    }
    echo "Destino del vuelo " .$destinito["Vuelo"]."es :".$destinito["Ciudad"];
    

}

?>