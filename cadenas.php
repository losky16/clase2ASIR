<?php
#recogida de datos
$text1=$_GET["operando1"];
$text2=$_GET["operando2"];
$text3=$_GET["operando3"];
$selector=$_GET["cadenas"];

function Cuentas_caracteres($text1){

    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

}

function Cuentas_palabras($text1){
    
    $res=str_word_count($text1);

    print "el resultado es ".$res."<br>";
}
 function Invierte_el_texto($text1){
    $res=strrev($text1);
    print "el resultado es".$res."<br>";

 }
function Busqueda($text1,$text2){
    $res=strpos($text1,$text2);
    print "el resultado es".$res."<br>";


}
function Remplazar_palabra($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    print "el resultado es".$res."<br>";


}


    
    switch ($selector){
        case 'Cuentas_caracteres':
            Cuentas_caracteres ($text1);
            break;
            case 'Cuentas_palabras':
                Cuentas_palabras($text1);
                break;
            case 'Invierte_el_texto':
                Invierte_el_texto($text1,$text2,$text3);
                break;   
            case  'Busqueda':
                Busqueda($text1);
                break;
            case 'Remplazar_palabra':
                Remplazar_palabra($text1,$text2,$text3);
                break;

           
            default:
            echo "operacion incorrecta";
            break;

        
            

            


    }

    

?>