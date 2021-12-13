<?php
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
function resto($num1,$num2){
$res= $num1 % $num2;
echo "el resultado es".$res."<br>";
}
function raizcuadrada($num1){

$res= sqrt($num1);

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
/*
#Fibonacci
   function fibonacci($fin){
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
            ?>