<?php

#Aqui se mostrara las funciones necesaria en el ejercicio de Aerolineas Losquiños


include "Arrays.php";


foreach ($VueloFabricante as  $fabricantito =>$info){
    
    echo '<strong>'.$fabricantito.'<strong><br>';

    foreach ($info as $Aereo ) {
        
        echo $Aereo.'<br';
    }
}
    


?>