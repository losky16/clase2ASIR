<?php
  $keys = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'); // Values to convert to, this is a hack of a way to do base conversion but it works.

  if(is_numeric($_POST["decimal"]){

  // Have to convert from str to int!
  $dec = intval($_POST["decimal"]);
  $base = intval($_POST["base"]);
  
  // Lets do Math!!!!!
  while(intval($dec) != 0) {
    $output .=  strval($keys[$dec % $base]);
    $dec /= $base;
  }

  // Switch statements make code nasty, but in this case it was faster to use.
  switch($base) {
    case 2:
        $base_w = "binary";
        $base_m = "0b";
        break;
    case 8:
        $base_w = "octal";
        $base_m = "0o";
        break;
    case 16:
        $base_w = "hexadecimal";
        $base_m = "0x";
        break;
  }

  // Display the results
  echo $_POST["decimal"] . " in " . $base_w . " is " . $base_m . strrev($output);
  } else {
    echo "That is not a number you douchewank!";
  }

?>