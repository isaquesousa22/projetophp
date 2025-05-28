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



function somarMatrizes($m1, $m2) {
    $linhas = count($m1);
    $colunas = count($m1[0]);
    $resultado = [];

    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            $resultado[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        }
    }

    return $resultado;
}

function imprimirMatriz($matriz) {
    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
            echo $valor . "\t";
        }
        echo "<br>";
    }
}






echo "<h3>Matriz 1:</h3>";
imprimirMatriz($matriz1);

echo "<h3>Matriz 2:</h3>";
imprimirMatriz($matriz2);


$resultado = somarMatrizes($matriz1, $matriz2);

echo "<h3>Matriz Resultado (Soma):</h3>";
imprimirMatriz($resultado);




 ?>