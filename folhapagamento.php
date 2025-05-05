<?php

function calculoRenda($salary) {
    if ($salary > 2259.21 && $salary < 2826.65) {
        $discount = $salary * (7.5 / 100);
    } elseif ($salary > 2826.66 && $salary < 3751.05) {
        $discount = $salary * (15 / 100);
    } elseif ($salary > 3751.06 && $salary < 4664.68) {
        $discount = $salary * (22.5 / 100);
    } elseif ($salary > 4664.68) {
        $discount = $salary * (27.5 / 100);
    } else {
        $discount = 0; // sem imposto para faixas abaixo de 2259.21
    }

    return $discount;
}

function imprimirIR($salary, $imposto) {
    echo "Salário bruto: R$ " . number_format($salary, 2, ',', '.') . "<br>";
    echo "Imposto de Renda mensal: R$ " . number_format($imposto, 2, ',', '.') . "<br>";
    echo "Salário líquido: R$ " . number_format($salary - $imposto, 2, ',', '.');
}


$salary = 3000.00;
$imposto = calculoRenda($salary);
imprimirIR($salary, $imposto);

?>
