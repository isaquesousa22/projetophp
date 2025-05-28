<?php 


$matriz1 = [
    [1, 2, 5],
    [3, 4, 8],
	[32,38,105]
];

$matriz2 = [
    [5, 6, 9],
    [7, 8, 10],
    [23,3,10]
];



function somarMatriz($m1) {
    $linhas = count($m1);
    $colunas = count($m1[0]);
    $resultado = 0;

    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            $resultado = $m1[$i][$j] + $resultado;
    }
}
    return $resultado;
}






$Rm1 = somarMatriz($resultado);



 
echo "$Rm1";  
 ?>