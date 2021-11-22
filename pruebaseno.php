<?php  
$num=$_POST["num"];
$modo=$_POST["modo"];
$selector=$_POST["operador"];


$s="º";//declaro la varible



if ($modo=="gr") {echo "</h4>";}//especifica el modo, grados o radianes.


function grados ($g){ //pasa radianes a grados.
         $d=rad2deg($g);
         return $d;
         }
function radianes ($r){ //pasa grados a radianes.
         $d=deg2rad($r);
         return $d;
         }


if ($selector) { //calcular seno
   if ($modo=="gr") {$n=radianes($num);} //pasar a radianes para calcular
   
   $sen=sin($n);
   echo "Seno de $num $s = $sen"."<br>"."<br>";
   }
   if ($selector) { //calcular coseno
    if ($modo=="gr") {$n=radianes($num);}
   
    $cos=cos($n);
    echo "Coseno de $num $s = $cos"."<br>"."<br>";
    } 
    if ($selector) { //calcular tangente
        if ($modo=="gr") {$n=radianes($num);}
        
        $tan=tan($n);
        echo "Tangente de $num $s = $tan"."<br>"."<br>";
        } 

?>

