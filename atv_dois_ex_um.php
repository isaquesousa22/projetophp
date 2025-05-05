<?php

$cont = 0;
$n = 0;
$n1 = 15;
$n2 = 18;
$n3 = 17;
$maior = 0;

while ($n != 0){
    

    if( $n1 > $n2 && $n1 > $n3){
        $maior = $n1;
    }
    
    elseif( $n2 > $n1 && $n2 > $n3){
        $maior = $n2;
    }

    elseif( $n3 > $n1 && $n3 > $n2){
        $maior = $n3;
    }

    $cont++;

}
$cont--;
echo "Os numeros digitador foram $n1, $n2, $n3, o maior
entre eles é $maior, foram digitados $cont números"
?>