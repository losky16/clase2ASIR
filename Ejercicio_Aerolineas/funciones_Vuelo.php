<?php

#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños


include "Arrays.php";


foreach ($VueloFabricante as  $fabricantito =>$info){
    

    foreach ($info as $infosito  ) {
        
        echo  "El fabricate del avion es:".$infosito.'<br>';

    
    }
}
    


?>