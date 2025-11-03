<?php 

$serie = [];
function loteria($a){
    for ($i=0; $i <= 6 ; $i++) { 
        $a[$i]= rand(1,49);
        echo $a[$i] ." ";
        for ($j = 0; $j < $i; $j++) {
            if ($a[$i] == $a[$j]) {
                $i--;
                break;
            }
        }
    }
    var_dump($a);
    return $a;
}
echo "Tu Serie de la loteria sera = ";
loteria($serie);

?>  