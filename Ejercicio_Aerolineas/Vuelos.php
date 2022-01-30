<?php
include '.\arrays.php';
include '.\funciones_Vuelo.php';

#RECOGIDA DE TADOS

$fabricante = $_POST["operador"];


buscarFabricante($vueloFabricante, $fabricante);
mediaPasajeros($VueloNumeroPasajeros,$fabricante);














?>