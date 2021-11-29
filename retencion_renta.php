<?php
#recogida de datos

#recogida de datos
$num=$_POST["text"];


function tipo_impositivo($num){
    $ueldo= $num *5;
    $res=$res /100;


    echo "El resultado es ".$res."<br>";
    if ($res>100) {

        
       

        echo " Su tipo impositivo es un" . $res;

        
    } else{

        echo "Tienes que pagar".$res;
    }
}


tipo_impositivo($num);






?>