<?php




$numeros=array(8, 3, 7 , 1);

$suspensos=array("Miguel", "kerry");

$coches=array("Ferrrari","Seat", "BMV","Opel");

echo $suspensos[0];
echo $coches[3];



$cuentaCoches= count($coches);

echo "Numero de coches".$cuentaCoches;

$aleatorio=rand(0,3);

echo "Coches aleatorio:".$coches[$aleatorio];

$parada=0;
while ($parada <= 4) {
    $aleatorio=rand(0,3);
    echo $coches[$aleatorio]."<br>";
    $parada++;
}

$alumnos=array("Nombre"=>"Miguel",
                "Apellido"=>"Kerry",
                "Edad"=>23,
                "estaAprobado"=>false);
    
    echo $alumnos["Edad"].$alumnos["Apellido"];
?>