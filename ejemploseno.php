<?php  

#recogida de datos

$num=$_POST["num"];
$modo=$_POST["modo"];
$opsen=$_POST["seno"];
$opcos=$_POST["coseno"];
$optan=$_POST["tangente"];
$select=$_POST["operadores"];


if ($modo=="gr") {echo "grados.</h4>"; $s="º";}//especifica el modo, grados o radianes.
else {echo "radianes.</h4>"; $s="rad";}
function grados ($g){ //pasa radianes a grados.
         $d=rad2deg($g);
         return $d;
         }
function radianes ($r){ //pasa grados a radianes.
         $d=deg2rad($r);
         return $d;
         }
if ($opsen=="seno") { //calcular seno
   if ($modo=="gr") {$n=radianes($num);} //pasar a radianes para calcular
   else {$n=$num;}
   $sen=sin($n);
   echo "<p>Seno de $num $s = $sen</p>";
   }
   if ($opcos=="coseno") { //calcular coseno
    if ($modo=="gr") {$n=radianes($num);}
    else {$n=$num;}
    $cos=cos($n);
    echo "<p>Coseno de $num $s = $cos</p>";
    } 
 
?>
