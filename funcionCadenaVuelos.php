<?php
function une_vuelos ($vuelo1,$vuelo2){

$res=array_merge($vuelo1,$vuelo2);
print_r ($res);
}

function Dvuelos($vuelo1,$vuelo2){

$res=array_diff($vuelo1,$vuelo2);
print_r ($res);
}

function Ovuelos($vuelo1){
sort($vuelo1);
print_r ($vuelo1);
}

function informacion($vuelo1,$vuelo2){
$res=array_intersect($vuelo1,$vuelo2);
print_r ($res);
}
?>