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
            echo "Lunes";
            if($hora==8) {
                echo "Estoy en implantacion";}
                elseif ($hora==9) {
                    echo "Sigo en implantacion";
                }
                elseif ($hora==10) {
                    echo "Sigo en implancaion";
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