<?php

#recogida de datos
$texto=$_POST["text"];


function palindromo($texto){
    $res=strrev($texto);
    print "el resultado es".$res."<br>"."<br>";
    if ($res==$texto) {
        print "El texto introducido:". $texto;
    }
    
        else {
            print "El texto introducido:".$texto;
        }

 }
palindromo($texto);













?>