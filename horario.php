<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $fecha=date("l");
    $hora=date("H");


    

    switch ($fecha) {
            case 'Monday':
                
            echo "Lunes"."<br>"."<br>";
            echo "Son las $hora y tenemos:"."<br>"."<br>";
            echo "Aplicaciones web"."<br>";
            echo "Aplicaciones web"."<br>";
            echo "Aplicaciones web"."<br>"."<br>";
            echo "Y despues tenemos"."<br>"."<br>";
            echo "Servicio en red"."<br>";
            echo "Servicio en red"."<br>";
            echo "Servicio en red"."<br>";
           
            if($hora==8) {
                echo "Estoy en Aplicaciones web"."<br>"."<br>";}
                elseif ($hora==9) {
                    echo "Estoy en aplicaciones web";
                    }
                    
                elseif ($hora==10) {
                    echo "Estoy en aplicaciones web"."<br>";
                   
                }
                elseif ($hora==11) {
                    echo "Estoy en el recreo";
                }

                elseif ($hora==12) {
                    echo "Estoy en servicio de red";
                }

                elseif ($hora==13) {
                    echo "Estoy en servicio de red";
                }
                elseif ($hora==14) {
                    echo "Estoy en servicio de red";
                }
                elseif ($hora==15) {
                    echo "Estoy  en mi casa";
        
                }
            
            
            break;
            case 'Tuesday':
            echo "Martes";
            echo "Son las $hora y tenemos:"."<br>"."<br>";
            echo "Administacion de sistema"."<br>";
            echo "Administacion de sistema"."<br>";
            echo "Administacion de sistema"."<br>";
            echo "Y despues tenemos"."<br>"."<br>";

            echo "Seguridad"."<br>";
            echo "Empresa"."<br>";
            echo "Empresa"."<br>";

            if($hora==8) {

                echo "Estoy en Administracion de sistema";}
             

             elseif ($hora==9){
                echo "Estoy en Administracion de sistema";
             }
             elseif ($hora==10) {
                echo "Estoy en Administracion de sistema";
                 
             }

             elseif ($hora==11) {
                 echo "EStoy en el recreo";

                
             }

             elseif ($hora==12) {
                 echo "Estoy en clase de seguridad";

                 
             }

             elseif ($hora==13) {
                 echo "Estoy en clase de Empresa";

                
             }

             elseif ($hora==14) {
                 echo "Estoy en clase de Empresa";
                 
             }

             elseif ($hora==15) {
                 echo "Estoy en casa";
                 
             }




            break;
            case 'Wednesday':
            echo "Miercoles";
            echo "Son las $hora y tenemos:"."<br>"."<br>";
            echo "Administracion de sistema"."<br>";
            echo "Administracion de sistema"."<br>";
            echo "Administracion de sistema"."<br>";
            echo "Y despues tenemos"."<br>"."<br>";

            echo "Servicio en red"."<br>";
            echo "Servicio en red"."<br>";
            echo "Servicio en red"."<br>";

            if (hora==8) {
                echo "Estoy en clase de Administracion de sistema";
            }

            elseif ($hora==9) {
               echo "Estoy en clase Administracion de sistema";
            }

            elseif ($hora==10) {
                echo "Estoy en clase Administracion de sistema";

               
            }

            elseif ($hora==11) {

                echo "Estoy en el recreo";
            }

            elseif ($hora==12) {
                echo "Estoy en servicio de red";
            }

            elseif ($hora==13) {
                echo "Estoy en servicio de red";
            
            }

            elseif ($hora==14) {
                echo "Estoy en servicio de red";
            }

            elseif ($hora==15) {
                echo "Estoy en en mi casa";
            }




            break;
            case 'Thursday':
            echo "Jueves";
            echo "Son las $hora y tenemos:"."<br>"."<br>";
            echo "Base de datos"."<br>";
            echo "Base de datos"."<br>";
            echo "Base de datos"."<br>";
            echo "Y despues tenemos"."<br>"."<br>";

            echo "Seguridad"."<br>";
            echo "Ingles"."<br>";
            echo "Ingles"."<br>";

        

                if ($hora==8) {
                    echo "Estoy en  clase de bases de datos";
                }

                elseif ($hora==9) {
                    echo "Estoy en  clase de bases de datos";
                }

                elseif ($hora==10) {
                    echo "Estoy en  clase de bases de datos";
                
                }

                elseif ($hora==11) {
                    echo "Estoy en el recreo";

                    
                }

                elseif ($hora==12) {
                    echo "Estoy en clase de seguridad";
                }

                elseif ($hora==13) {
                    echo "Estoy en clase de Ingles";
                    
                }

                elseif ($hora==14) {
                    
                    echo "Estoy en clase de Ingles";
                }
               
                elseif ($hora==15) {
                    echo "Estoy en casa";
                }

            break;
            case 'Friday':
            echo "Viernes";
            echo "Son las $hora y tenemos:"."<br>"."<br>";
            echo "Ingles"."<br>";
            echo "Seguridad"."<br>";
            echo "Seguridad"."<br>";
            echo "Y despues tenemos"."<br>"."<br>";

            echo "Aplicaciones web"."<br>";
            echo "Empresa"."<br>";
            echo "Empresa"."<br>";

            

           if ($hora==8) {
               echo "Estoy en clase de Ingles";
               
           }

           elseif ($hora==9) {
               echo "Estoy en clase de seguridad";
               
           }
           elseif ($hora==10) {
            echo "Estoy en clase de seguridad";
           }

           elseif ($hora==11) {
              echo "Estoy en el recreo";
           }

           elseif ($hora==12) {
               echo "Estoy en implantacion  web";
            
           }

           elseif ($hora==13) {
               echo "Estoy en clase de Empresa";
           }

           elseif ($hora==14) {
             echo  "Estoy en clase de Empresa";
            
           }
           elseif ($hora==15) {
               echo "Estoy en mi";
           }
           
        
           case 'Fin de semana':
               echo "Sabado";

               if ($fecha) {
                echo "Estoy en mi casa tranquilo";

               }
               elseif ($fecha) {
                   echo "Estoy en mi casa tranquilo";
               }

            
                  
               
               break;

            break;
        
        default:
            
            break;
            
    


               


            }

?>


    
</body>
</html>