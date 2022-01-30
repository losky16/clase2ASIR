function mediaPasajeros($VueloNumeroPasajeros,$fabricante){
            echo $fabricante;
            $totalPasajeros=0;
            $totalVuelos=0;
        foreach ($VueloNumeroPasajeros as $pasajerito) {
            
           

            if ($pasajerito["Vuelo"]==$fabricante) {
            echo "<br>";
            echo $pasajerito["Pasajeros"];
            echo "<br>";

            $totalPasajeros= $totalPasajeros + $pasajerito["Pasajeros"];
            
               echo $totalPasajeros;
               $totalVuelos=$totalVuelos+1;
               
            
            }
        }
        echo "<br>";
        echo $totalPasajeros/$totalVuelos;
        echo "<br>";
        echo $totalVuelos;




}
