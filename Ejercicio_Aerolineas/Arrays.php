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

    array("Vueling-AE12"=>"Boering"),
    array("Volotea-EA21"=>"Airbus"),
    array("Iberia-WE44"=>"Airbus"),
    array("Ryanair-EW44"=>"Boering"),
    array("Vueling-ZK87"=>"Airbus"),
    array("Volotea-UA21"=>"Boering"),
    array("Iberia-WH44"=>"Boering"),
    array("Ryanair-ELOO"=>"Airbus")
    






);
print_r($VueloFabricante);
echo "<br/>";
echo "<br/>";
echo "<br/>";

$VueloDuracionViaje=array(

    array("Nombre"=>"Vueling-AE12","Tiempo"=>"120 minutos"),
    array("Volotea-EA21"=>"100 minutos"),
    array("Iberia-WE44"=>"340 minutos"),
    array("Ryanair-EW44"=>"45 minutos"),
    array("Vueling-ZK87"=>"600 minutos"),
    array("Volotea-UA21"=>"65 minutos"),
    array("Iberia-WH44"=>"90 minutos"),
    array("Ryanair-ELOO"=>"50 minutos"),
    array("Vueling-AE12"=>"115 minutos"),
    array("Volotea-EA21"=>"100 minutos"),
    array("Iberia-WE44"=>"85 minutos"),
    array("Ryanair-EW44"=>"360 minutos")


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


function duracion($VueloDuracionViaje)


foreach ($VueloDuracionViaje as $Duracion ) {
    echo "Aerolinea: ".$Duracion["Nombre"].": ".$Duracion["Tiempo"]."<br>";
}






?>
