<?php

$vueloDestino=array(

    array("Vueling-AE12"=>"Milan"),
    array("Volotea-EA21"=>"Roma"),        
    array("Iberia-WE44"=>"Estabul"),
    array("Ryanair-EW44"=>"Madrid"),
    array("Vueling-ZK87"=>"Lima"),
    array("Volotea-UA21"=>"Bilbao"),
    array("Iberia-WH44"=>"Roma"),
    array("Ryanair-ELOO"=>"Madrid"),
    array ("Vueling-AE12"=>"Roma"),
    array("Volotea-EA21"=>"Roma")




);
print_r($vueloDestino);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


$VueloFabricante=array(

    "Vueling-AE12"=>"Boering",
    "Volotea-EA21"=>"Airbus",
    "Iberia-WE44"=>"Airbus",
    "Ryanair-EW44"=>"Boering",
    "Vueling-ZK87"=>"Airbus",
    "Volotea-UA21"=>"Boering",
    "Iberia-WH44"=>"Boering",
    "Ryanair-ELOO"=>"Airbus"
    






);

print_r($VueloFabricante);
echo "<br/>";
echo "<br/>";
echo "<br/>";
foreach ($VueloFabricante as $fabricacion => $fabri) {
    echo "Compañia ".$fabricacion  ." su aerolinea es ".$fabri."<br/>";

}



$VueloDuracionViaje=array(

    array("Nombre"=>"Vueling-AE12","Tiempo"=>"120 minutos"),
    array("Nombre"=>"Volotea-EA21","Tiempo"=>"100 minutos"),
    array("Nombre"=>"Iberia-WE44","Tiempo"=>"340 minutos"),
    array("Nombre"=>"Ryanair-EW44","Tiempo"=>"45 minutos"),
    array("Nombre"=>"Vueling-ZK87","Tiempo"=>"600 minutos"),
    array("Nombre"=>"Volotea-UA21","Tiempo"=>"65 minutos"),
    array("Tiempo"=>"Iberia-WH44","Tiempo"=>"90 minutos"),
    array("Nomnre"=>"Ryanair-ELOO","Tiempo"=>"50 minutos"),
    array("Nomnre"=>"Vueling-AE12","Tiempo"=>"115 minutos"),
    array("Nombre"=>"Volotea-EA21","Tiempo"=>"100 minutos"),
    array("Nombre"=>"Iberia-WE44","Tiempo"=>"85 minutos"),
    array("Nombre"=>"Ryanair-EW44","Tiempo"=>"360 minutos")


);
print_r($VueloDuracionViaje);
echo "<br/>";
echo "<br/>";
echo "<br/>";



$VueloNumeroPasajeros=array(

    array("Vueling-AE12"=>"90 personas"),
    array("Volotea-EA21"=>"75 personas"),
    array("Iberia-WE44"=>"100 personas"),
    array("Ryanair-EW44"=>"60 personas"),
    array("Vueling-ZK87"=>"77 personas"),
    array("Volotea-UA21"=>"93 personas"),
    array("Iberia-WH44"=>"Roma"),
    array("Ryanair-ELOO"=>"Madrid"),
    array("Vueling-AE12"=>"Roma"),
    array("Volotea-EA21"=>"Roma")




);

print_r($VueloNumeroPasajeros);
echo "<br/>";











?>
