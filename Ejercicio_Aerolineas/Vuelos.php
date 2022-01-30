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

?>