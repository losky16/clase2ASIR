<?php

#recogida de datos
$num=$_POST["num"];
$si_no=$_POST["seleciona"];
$select=$_POST["Herramientas"];


$decimal=rand(0,2048);
if ($si_no=='Si') {
    $num=$decimal;
    
    
}
 






function Decimal_Binario($num){

   $res=decbin( $num);
   echo "El resultado es ".$num."<br>";  
     
    echo "El resultado es ".$res."<br>";      
}
 function Decimal_a_Octal($num){
    $res=decoct( $num);
    echo "El resultado es ".$num."<br>"; 
    echo "El resultado es ".$res."<br>";
 }

 function Decimal_a_Hexadecimal($num){

    $res=dechex( $num);
    echo "El resultado es ".$num."<br>"; 
     
    echo "El resultado es ".$res."<br>";      
}
 function Binario_a_Decimal($num){
    $res=bindec( $num);
    echo "El resultado es ".$num."<br>"; 

    echo "El resultado es ".$res."<br>";


}    

function Octal_a_Decimal($num){

    $res=octdecc( $num);
    echo "El resultado es ".$num."<br>"; 

    echo "El resultado es ".$res."<br>";




}
function Hexadecimal_a_Decimal($num){

    $res=hexdec( $num);
    echo "El resultado es ".$num."<br>"; 

    echo "El resultado es ".$res."<br>";

}









switch ($select) {
    case 'Decimal_Binario':
        Decimal_Binario($num);
        break;
    case 'Decimal_a_Octal':  
        Decimal_a_Octal($num);
        break;
    case 'Decimal_a_Hexadecimal':
        Decimal_a_Hexadecimal($num);
        break;
    case 'Binario_a_Decimal':
        Binario_a_Decimal($num);
        break;
    case 'Octal_a_Decimal':
        Octal_a_Decimal($nun);
        break;
    case 'Hexadecimal_a_Decimal':
        Hexadecimal_a_Decimal($num);
        break;

    
    default:
        
        break;
}









?>
