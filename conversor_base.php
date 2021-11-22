<?php

#recogida de datos
$num=$_POST["num"];
$opc=$_POST["seleciona"];
$select=$_POST["Herramientas"];

$decimal =(0,2048);

  // valor decimal
  $decimal = 14;
    
  // conversión para binario
  $binario = decbin($decimal);
    
  // mostrar el resultado
  echo "El resultado de la conversión es: " . $binario;







function Decimal_Binario($num1){

    $binario = decbin($decimal);
    echo "El resultado de la conversión es: " . $binario;
}


function Decimal_a_Octal($num1){

    $decimal = decbin($decimal);
    echo "El resultado de la conversión es: " . $;
}

function Decimal_a_Hexadecimal($num1){

    $decimal = $dechex($decimal);
    echo "El resultado de la conversión es: " . $binario;
}

function Binario_a_Decimal($num1){

    $decimal = $dechex($decimal);
    echo "El resultado de la conversión es: " . $binario;


}
function Octal_a_Decimal($num1,$num2){
    $decimal = $dechex($decimal);
    echo "El resultado de la conversión es: " . $binario;
}
function Hexadecimal_a_Decimal($num1){

}  $decimal = $dechex($decimal);
echo "El resultado de la conversión es: " . $binario;


switch ($num) {
    case 'Decimal_Binario':
        Decimal_Binario($decimal);
        break;
    case'Decimal_a_Octal':
        break;
    Decimal_a_Octal($decimal);
    case 'Decimal_a_Hexadecimal':
        Decimal_a_Hexadecimal($decimal);
        break;
    case 'Binario_a_Decimal':
        Binario_a_Decimal($decimal);
        break;
    case 'Octal_a_Decimal':
        Octal_a_Decimal($decimal);
        break;
    case 'Hexadecimal_a_Decimal':
        Hexadecimal_a_Decimal($decimal);
        break;

    
    default:
        # code...
        break;
}









?>
