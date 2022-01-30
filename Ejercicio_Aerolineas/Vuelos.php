<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];

// Aqui se inicializa las funciones
buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);
totalMinutosVuelos($VueloDuracionViaje,$fabricante);
ultimosDestinos($vueloDestino,$fabricante);
/**
 * Creamos la funcion ultimosDestinos para mostranos los ultimos destinos de los vuelos de las compañias
 * @param vueloDestino contiene el array 
 * @param fabricante contiene el vuelo selecionado por el usuario 
 */
function ultimosDestinos($vueloDestino,$fabricante){
    //declaraomos la variables a usar.
    $textoCiudades=""; // esa variable almacena un string(texto) con totos los destinos de la compañia

    //me hace falta reecorrer el array para llegar a vuelo

    foreach ($vueloDestino as $destinito ) {
        
        
        //necesito saber los ultims destino del vuelo selecionado
        if ($destinito["Vuelo"]==$fabricante) {
           
            
            //necesito comprobar si texto ciudades esta vacio para no mostrar la ,.
            
            if ($textoCiudades=="") {
                $textoCiudades=$destinito["Ciudad"];
            
            }
            //si el texto no esta vacio concatenamos con la ,
            else {
                $textoCiudades=$textoCiudades. ",".$destinito["Ciudad"];
                
            }
        }   

    }       
    echo "<br>";
    echo "Últimos destinos: " .$textoCiudades;








}







?>