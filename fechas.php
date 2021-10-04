<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios fechas</title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fecha</h2>
    
    <p>vamos  aprender a tratar fechas en php y funcionalidades</p>
    <br>
    <?php

echo "Vamos a trabajar con fechas"."<br>";
echo "Hoy es:".date("l")."<br>";
echo "Dime la fecha actual:".date("Y/M/g")."<br>";
echo "Dime la fecha actual:".date("Y/n/j")."<br>";

$hora = date("H:i:s");
echo "Dime la hora actual:".$hora."<br>";

    ?>
<a href="http://localhost/ASIR/fechas.php">
</body>
</html>