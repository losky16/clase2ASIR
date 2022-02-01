<?php

include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador1"];
$fabricante = $_POST["operador2"];

destinoVuelo($vueloDestino,$fabricante);
fabricanteAvion($vueloFabricante,$fabricante);





?>