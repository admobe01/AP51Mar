<?php 

$edad1 = rand(1,100);
$edad2 = rand(1,100);

function diferenciaEdad($a,$b){
    if($a>$b){
        return abs($a - $b);
    }
}

echo "La difrenecia entre los hermanos es: " . diferenciaEdad($edad1,$edad2) . " Teniendo el primer hermano $edad1 , y el segundo $edad2";
?>