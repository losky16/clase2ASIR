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

 
//Últimos destinos
//function Destino($vueloDestino,$select){
foreach ($vueloDestino as $ciudad => $ciudadito) {

  foreach ($ciudadito as $ciudadela =>$palacete ) {
        
    
  }
  
}
echo "Ultimo destino es:".$palacete."<br>";
//}
//Minutos del vuelo
 // function DuracionViaje ($VueloDuracionViaje,select){}
foreach ($VueloDuracionViaje as $viaje => $viajecito) {

  foreach ($viajecito as $viajectito =>$viajete ) {
        
    
  }
  
}
echo "Minutos del vuelo son:".$viajete."<br>";

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

  // function Tciudades($vueloDestino)
  

//}

//Cual es la ciudad más visitada.



//Cuales son las ciudades menos visitadas.

  




#Estadística del avión

//Destinos del avión






// Fabricante del avión.






// totales volados





// Media de horas voladas





// Media de pasajeros






//Pasajeros totales

 
  