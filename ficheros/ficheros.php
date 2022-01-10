<?php



echo readfile("ficheros.txt");

echo "<br>";

echo filesize("ficheros.txt");

// APERTURA Y LECTURA DE UN FICHERO

//ABRO EL FICHERO EN UNA DIRECCION DE MEMORIA

$ficheros=fopen("ficheros.txt","r")or die("fallo al abrir el fichero");

echo $ficheros;
/*OBTENGO EL TAMAÑO DEL FICHERO
$pesofichero=filesize("ficheros.txt");
/*REPRESENTO POR PANTALLA EL CONTENIDO, le doy el recurso
$fichero y su peso $pesofichero
*/
/*una vez he terminado de representarlo cierro el recurso
*/
 echo fread($ficheros,$pesofichero);
 fclose($ficheros);

//Escribir
$ficheros=fopen("ficheros.txt","w")or die("fallo al abrir el fichero");
$nuevotexto="Que te gustan las variables";

 fwrite($ficheros,"prefiero camelarte");
fclose($ficheros);
?>
