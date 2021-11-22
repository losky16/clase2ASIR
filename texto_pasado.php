<?php
#recogida de datos
$text1=$_GET["operando1"];
$text2=$_GET["operando2"];
$text3=$_GET["operando3"];
$selector=$_GET["cadenas"];

function Convertir_Texto($text1){

    $res=str_word_count($text1);

    print "el resultado es ".$res."<br>";
}

function Desordenar_Texto($text1){
    $res=strrev($text1);
    print "el resultado es".$res."<br>"."<br>";
    
}
 function ConvertirCadena($text1){
    $res=strrev($text1);
    print "el resultado es".$res."<br>"."<br>";

 }
function ContarCaracteres($text1){
    
    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

    
    
    
    }
    


function Remplazar_palabra($text3,$text2,$text1){
    $res=str_replace($text3,$text2,$text1);
    print "el nuevo orden es".$res."<br>";


}


    
    switch ($selector){
        case 'convertir':
            Convertir_Texto ($text1);
            break;
            case 'Desordenar':
                Desordenar_Texto($text1);
                break;
            case 'ConvertirCadena':
                ConvertirCadena($text1,$text2,$text3);
                break;   
            case  'Contar':
                ContarCaracteres($text1);
                break;
            case 'Remplazar_palabra':
                Remplazar_palabra($text3,$text2,$text1);
                break;

           
            default:
            echo "operacion incorrecta";
            break;

        
            

            


    }

    

?>