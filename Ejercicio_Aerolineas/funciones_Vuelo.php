<?php

#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños


include "Arrays.php";

#primeras funciones del ejercicios / nose porque al ponerle las funciones no me muestra el resultado,

//VueloFabricante

 //function Fabricante($select,$VueloFabricante){
  
foreach ($VueloFabricante as  $fabricantito =>$info){
    

    foreach ($info as $infosito =>$infu ) {
        /* Posible solucion pero nose porque no  se muestra, sin embargo tal como lo tengo me muestra algo
      if ($fabricantito=="Airbus") {
          echo $fabricantito
        
       
       }
        
      if ($fabricantito=='Borering') {
        echo $fabricantito
      }  
      */
    }
    
}
echo "El fabricante del avion:".$infu."<br>";
 //}
//VueloDestino
foreach ($vueloDestino as $ciudad => $ciudadito) {

  foreach ($ciudadito as $ciudadela =>$palacete ) {
        
    
  }
  
}
echo "Ultimo destino es:".$palacete."<br>";

//Minutos del vuelo
foreach ($VueloDuracionViaje as $viaje => $viajecito) {

  foreach ($viajecito as $viajectito =>$viajete ) {
        
    
  }
  
}
echo "Minutos del vuelo son:".$viajete."<br>";

//media de pasajeros

$contador=0;
$totalpasajeros=0;

foreach ($VueloNumeroPasajeros as $pasajerito => $pasajeritito) {

  foreach ($pasajeritito as $pasajetitito =>$pasarajete ) {
        
    
  }
  
}
echo "Media de pasajeros es:".$pasarajete."<br>";

#segunda funciones del ejercicio
//media de horas

$totalpasajeros=0;
$contador=0;
foreach ($VueloDuracionViaje as $viajecitos) {
    
  $vuelo=$viajecitos["Nombre"];
    $pasajeros=$viajecitos["Tiempo"];
       $totalpasajeros=$totalpasajeros+$pasajeros;
       $contador++;
}
$totalpasajeros=$totalpasajeros/$contador;
//aqui estamos conviertiendo minutos en horas
$totalpasajeros=$totalpasajeros/60;
echo "La media de horas de este vuelo es: ".$totalpasajeros."<br>";



//total de pasajeros
$totalpasajeros=0;


foreach($VueloNumeroPasajeros as $pasagenete){
  $todosjuntos=$pasagenete["Pasajeros"];
  $totalpasajeros=$todosjuntos+$totalpasajeros;
}
echo "El total de pasajeros de todos los vuelos es: ".$totalpasajeros."<br>";

// numero de aviones por fabricante

foreach ($vueloDestino as $ciudadita) {
  $vuelo=$ciudadita["Vuelo"];
  $ciudad=$ciudadita["Ciudad"];
   
      echo "Las ultimas ciudades visitados por este avion fueron: ". $ciudad."<br>";
  }



  










?>