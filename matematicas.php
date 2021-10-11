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

    echo "ejemplo de bucle While";

    $numero=0;

    while ($numero <= 10) {
        # paso 1:Mostrar mi numero
        echo "Mi numero es:".$numero."<br>";
        # 2. actualizar la variable numero
        $numero++;

        
    }
    echo " mi cuenta ha terminado. ".".<br>";
    $numero1=0;
    $aleatorio = rand(0,100);
    echo "Mi numero aleatorio es:"."$aleatorio"."<br>";
    while ($numero1 <= $aleatorio) {
         # paso 1:Mostrar mi numero
         
         echo "mi numero: "." $numero1" ."<br>";
          # 2. actualizar la variable numero
          #$numero++; =#numero=$numero+1;
          #$numero1=numero1+5;
          #numero++
          $numero1++;

          for ($cuenta=0; $cuenta < ; $cuenta++) { 
            # Accion
            print "Imprime la cuenta";
          }

          $nombre= "miguel";
          $edad=25:;
          $esmayor= true;

          function persona($nombre,$edad){
              echo "su nombre es:".$nombre;

              if ($edad %2==0 ) {
                echo "su edad es par";
              }
                  else {
                      
                    echo "su edad es impar";
                  }
              }
              persona("miguel",25);
              persona("manuel",20);
              persona("nacho",27);
              persona("javi",278);
              echo "<br"."<br>"."<br>"

              $alumnos = array("nacho","Gonzalo","Javi","Mauel");
              echo count($alumnos)."<br>";
              $selectAleatorio = rand(0,5);

              echo "El alumno es:".$alumnos[$selectAleatorio];
    }


?>
</body>
</html>