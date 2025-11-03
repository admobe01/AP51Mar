<?php 

$numeroConvertir = rand(1,10);

function numRomano ($a){
    if($a == 1){
        $romano = "I";
    }
    elseif($a == 2){
        $romano = "II";
    }
    elseif($a == 3){
        $romano = "III";
    }
    elseif($a == 4){
        $romano = "IV";
    }
    elseif($a == 5){
        $romano = "V";
    }
    elseif($a == 6){
        $romano = "VI";
    }
    elseif($a == 7){
        $romano = "VII";
    }
    elseif($a == 8){
        $romano = "VIII";
    }
    elseif($a == 9){
        $romano = "IX";
    }
    else{
        $romano = "X";
    }
    return $romano;
}
    echo "Tu numero ".$numeroConvertir. " en romano seria " . numRomano($numeroConvertir);


?>