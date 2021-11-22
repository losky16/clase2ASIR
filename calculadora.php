
<?php
#recogida de datos
$num1=$_GET["operando1"];
$num2=$_GET["operando2"];
$selector=$_GET["operador"];

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

            
    



   }
    

    switch ($selector) {
        case 'suma':
            suma($num1,$num2);
            break;

            case 'resta':
                resta($num1,$num2);
                break;
                case 'multiplicacion':
                    multiplicacion($num1,$num2);
                    break;
            case 'division':
            division($num1,$num2);
            break;
            case 'resto':
            resto($num1,$num2);
            break;

            case 'raiz cuadrada':
                raizcuadrada($num1);
                break;
                
                    case 'exponente':
                        elevar ($num1,$num2);
                        break;
                        case 'fibonacci':
                            fibonacci($num1);
                            break;
                        case 'seno':
                            seno($num1);
                            break;
                        
            default:
            echo "operacion incorrecta";
            break;
    }
    

    

?>


