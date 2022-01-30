<?php
//Alguno de las foreach  del ejercicio Estadística del aeropuerto y Estadística de Ciudades me he fijado en el codigo (github) de algunos compañeros(naho alonso y maria) para tenerlo como referencia ya que me ha resultado dificil de sacarlos por mi mismo,
#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños
//

include ".\arrays.php";

#primeras funciones del ejercicios / nose porque al ponerle las funciones no me muestra el resultado,

//Fabricante

function buscarFabricante($vueloFabricante, $fabricante){
  echo "Compañia ".$fabricante.":";
 
  foreach ($vueloFabricante as $fabricantito) {
      
      
      if ($fabricantito["Vuelo"]==$fabricante)  {
          echo "<br>";
          $resultado=$fabricantito["Fabricante"];
          echo "Fabricante ".$resultado;        }
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
//}
//media de pasajeros

// function MediaPasajeros($VueloNumeroPasajeros,$select){}

foreach ($VueloNumeroPasajeros as $pasajerito => $pasajeritito) {

  foreach ($pasajeritito as $pasajetitito =>$pasarajete ) {
        
    
  }
  
}
echo "Media de pasajeros es:".$pasarajete."<br>";
//}



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
//aqui estamos conviertiendo minutos en horas
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






// Minutos totales volados





// Media de horas voladas





// Media de pasajeros






//Pasajeros totales

 
  