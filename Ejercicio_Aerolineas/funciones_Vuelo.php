<?php
//Alguno de las foreach  del ejercicio Estadística del aeropuerto y Estadística de Ciudades me he fijado en el codigo (github) de algunos compañeros(naho alonso y maria) para tenerlo como referencia ya que me ha resultado dificil de sacarlos por mi mismo,
#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños
//

include ".\arrays.php";

#primeras funciones del ejercicios / nose porque al ponerle las funciones no me muestra el resultado,

//Fabricante

/**
 * Función que obtiene la información del fabricante de un vuelo.
 * @param vueloFabricante Contiene el array con la información.
 * @param fabricante Contiene el nombre del vuelo seleccionado por el usuario.
 */
function buscarFabricante($vueloFabricante, $fabricante){
  echo "Compañia ".$fabricante.":";
 
  //Recorremos los valores del array.
  foreach ($vueloFabricante as $fabricantito) {
      //Comprobamos que el valor "Vuelo" sea el seleccionado por el usuario.
      if ($fabricantito["Vuelo"]==$fabricante)  {
          echo "<br>";

          //Mostramos el resultado.
          echo "Fabricante ".$fabricantito["Fabricante"];       
      }
  }
}

 

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







/**
 * funcion que clcula la media de pasajeros
 * @param VueloNumeroPasajeros contiene el array
 * @param fabriante compañia que a selecionado el usuario
 * 
 */
function mediaPasajeros($VueloNumeroPasajeros,$fabricante){
  //declaramos las variables a usar      
  $totalPasajeros=0; // almacena el total de pasajeros.
  $totalVuelos=0; // almacena el total de vuelos.
  // Recorremos el array
  
  foreach ($VueloNumeroPasajeros as $pasajerito) {
    // Comprobamos que el valor del vuelo sea el selecionado por el usuario
    if ($pasajerito["Vuelo"]==$fabricante) {
      //el total pasajeros se vaya sumado  todo los pasajeros
      $totalPasajeros= $totalPasajeros + $pasajerito["Pasajeros"];
      //el total de vuelo se va incrementado por cada vuelo encontrado
      $totalVuelos=$totalVuelos+1;
    }
  }

  echo "<br>";
  echo " Media Pasajeros: ".$totalPasajeros/$totalVuelos;

}



#SEGUNDA FUNCIONES DEL EJERCICIO

//Estadística del aeropuerto

//Media de horas voladas de todos los vuelos.

//No entiendo porque en este ejercicio me dice que  no esta definida  "Nombre" y "Tiempo", en otro apartado si

$totalpasajeros=0;
$num=0;
foreach ($VueloDuracionViaje as $viajecitos) {
    
  $vuelo=$viajecitos["Nombre"];
    $pasajeros=$viajecitos["Tiempo"];
       $totalpasajeros=$totalpasajeros+$pasajeros;
       $num++;
}
$totalpasajeros=$totalpasajeros/$num;
//aqui estamos conviertiendo en horas
$totalpasajeros=$totalpasajeros/60;
echo "La media de horas de este vuelo es: ".$totalpasajeros."<br>";



//Número total de pasajeros de todos los vuelos.
$totalpasajeros=0;


foreach($VueloNumeroPasajeros as $pasagenete){
  $todosjuntos=$pasagenete["Pasajeros"];
  $totalpasajeros=$todosjuntos+$totalpasajeros;
}
echo "El total de pasajeros de todos los vuelos es: ".$totalpasajeros."<br>";

//Número de aviones por fabricante.



// Destino con más conexiones.


// Destino con menos conexiones.










#Estadística de Ciudades

// El número totales de ciudades visitadas.
// function ciudades($vueloDestino){
foreach ($vueloDestino as $ciudadita) {
  $vuelo=$ciudadita["Vuelo"];
  $ciudad=$ciudadita["Ciudad"];
   
      echo "Las ultimas ciudades visitados por este avion fueron: ". $ciudad."<br>";
  }

//
//Las veces que se ha ido a una a una determinada ciudad.

  
//Cual es la ciudad más visitada.



//Cuales son las ciudades menos visitadas.

  




#Estadística del avión

//Destinos del avión

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


// Fabricante del avión.

/**
 * Creamos la funcion fabricanteAvion para mostras el febricnate de cada avion
 * @param $vueloDestino nos introduce dentro del array
 * @param 
 */
function fabricanteAvion($vueloFabricante,$fabricante){
  echo "<br>";
  echo "Compañia ".$fabricante;
  //recorremos el array
  foreach ($vueloFabricante as $fabriAvion ) {
       
      //comprobamos que el valor del vuelo es el deseado por el usuario
      if ($fabriAvion["Vuelo"]==$fabricante) {
          echo "<br>";
         
          //mostramos el resultado
          echo"El fabricante es: " .$fabriAvion["Fabricante"];
      }

      
  }
  
}




// totales volados





// Media de horas voladas





// Media de pasajeros






//Pasajeros totales

 
  