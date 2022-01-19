
<?php
include 'funciones.php';


#recogida de datos
$num1=$_GET["operando1"];
$num2=$_GET["operando2"];
$selector=$_GET["operador"];



   

   


   

       
            
    



   
    

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


