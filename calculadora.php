<!DOCTYPE html>
<html lang="en">
<head>
    <style>

Button {
  font-family: verdana;
  font-size: 20px;
  border-left-style: solid
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>


<form  method="POST">   >
        <fieldset><br>
            <legend>Calculadora</legend>
        <label >Numero1</label>
        <input type="text"><br>
        <label>Numero2</label>
        <input type="text" ><br><br><br>
        <label>operaciones:</label><br><br><br> 
       
        <input type="Button" name="" value=" + " onclick="calcula('+')"><br> 
        <input type="Button" name="" value=" - " onclick="calcula('-')"><br>  
        <input type="Button" name="" value=" X " onclick="calcula('*')"><br>  
        <input type="Button" name="" value=" / " onclick="calcula('/')"><br>

        <input type="Button" name="raiz cuadrada" value="raiz cuadrada"><br><br><br>   
        <input type="Button" name="" value=" % " onclick="calcula('/')"><br><br><br> 
        <input type="Button" name="" value="resolver"><br><br><br>
        <h3>Resultado</h3><br><br>


</form>

<?php

$num1=5;
$num2=2;

function suma($num1,$num2){

    $res= $num1 + $num2;

    print "El resultado es ".$res."<br>";
}


function resta($num1,$num2){

    $res= $num1 - $num2;

    print "El resultado es ".$res."<br>";
}

function multiplicacion($num1,$num2){

     $res= $num1 * $num2;

  print "El resultado es ".$res."<br>";
}

function division($num1,$num2){

    $res= $num1 / $num2;

    print "El resultado es ".$res."<br>";

}
function raizcuadrada($num1){

    $res= sqrt($num1,);

    print "El resultado es ".$res."<br>";

}
function Elevar_al_cuadrado($num2){

        $res= pow(num2,2);
        print "El resultado es ".$res."<br>";

}
function Elevar_al_cubo($num2,){

    $res= pow(num2,3);
    print "El resultado es ".$res."<br>";

}
function elevar($num1,$num2){

   $res=pow($num1,$num2);

    print "El resultado es ".$res."<br>";

   

   }

   function fivo($fin){
       $var1=0;
       $var2=1;
       $var3=0;
       $ini=0;
   

       while ($ini <= $fin) {
        #paso1
           $var3=$var1+$var2;
        #paso2
            $var1=$var2;
            $var2=$var3;
        #paso3
            $ini++;
            echo $var3."<br>";
            }
    



   }
    fivo(5);

    

?>


</body>
</html>