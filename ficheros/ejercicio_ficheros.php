<?php
//RECOGIDA DE DATOS

$texto1=$_POST["operando1"];
$textarea=$_POST["ejecicio_ficheros"];
echo "ellllelel";

if ($texto1>=1) {
    $ficheros=fopen("ejercicio_ficheros.txt","w")or die("fallo al abrir el fichero");
    fwrite($ficheros,$textarea);
    fclose($ficheros);
    echo "ellllelel2";

} else {
    echo "tus padre el cojo";
    echo "ellllelel3";
}
?>
