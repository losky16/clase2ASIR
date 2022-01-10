<?php
#CONSTATES

$pi=pi();
echo "Numero PI:".$pi;

//Es una forma de proteger datos reservados


define("GRAVEDAD",9.8); 
echo "Constante de la Gravedad:".GRAVEDAD;

//agrupacion de valores=ARRAY

$numeros=array(2,4,8,10,12,GRAVEDAD);

echo "<br>";

$cantidad_numeros=count($numeros);
$desordena=shuffle($numeros);

echo "cuenta:".$cantidad_numeros."<br>";
 print_r($numeros);

 for ($i=0; $i <$cantidad_numeros ; $i++) { 
     echo "VALOR DE".$i.": " .$numeros[$i]."<br>";
 }
echo "<br> For each<br>";

foreach($numeros as $numerito){
    echo $numerito."<br/>";
}
//ARRAY ASOCIATIVO
$provincias=array(

    "Andalucia"=>"Sevilla",
    "Madrid"=>"Madrid",
    "Aragon"=>"Zaragoza",
    "Pais Vasco"=>"Bilbao"











);

print_r ($provincias);




echo "<br/>";

foreach ($provincias as $provincitas => $capitalita) {
    echo "La comunidad Autonoma".$provincitas ."su capital es".$capitalita."<br>";
}

//Añadir vañores en ARRAYS Normales
$numeros[]=3;
echo "<br>";
//MODIFICAR UN VALOR DE ARRAY

$numero[4]=3;
foreach ($numeros as $numeritos) {
    echo"Valor del Array" .$numeritos."<br>";
}

//ELIMINAR UN VALOR DE UN ARRAY
echo "Eliminar un array"."<br>";
echo "<br>";
unset($numeros[6]);
foreach ($numeros as $numeritos) {
    echo"Valor del array" .$numeritos."<br>";
}

#ARRAY MULTIDIMENSIONALES

$Asir=array(

    array("Nombre"=>"Nacho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere tela de Gracioso"),
    array("Nombre"=>"Kerry","Frase"=>"au au au"),
    array("Nombre"=>"Miguel","Frase"=>"ke ezo eh"),
    );
    
    print_r($Asir);
    echo "<br>";
    
    foreach ($Asir as $alumno ) {
        echo "Frase Tipica de".$alumno["Nombre"].":".$alumno["Frase"]."<br>";
    }


    //FUNCIONES

    $numero1=10;
    $numero2=4;

    function suma($numero1, $numero2){
        $res=$numero1+$numero2;
        echo $res;

    }
    $sumador=suma($numero1,$numero2);

    echo $sumador;

    echo "<br>";

    echo GRAVEDAD;

    $redon=round(GRAVEDAD);

    echo $redon;


/*
$manule="Cafelaso de arvellana";

$miguel=0;

$pako=true;

$dato1=$_POST["datito1"];
$dato2=$_POST["datito2"];
#CODICCIONALES

if (condition) {
    # code...
}else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

#BUCLES

while ($a <= 10) {
    # code...
}
 for ($i=0; $i < ; $i++) { 
     # code...
 }

*/
?>