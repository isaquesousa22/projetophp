<?php

$pessoas = [
    [
        "nome" => "Maria",
        "sobrenome" => "Santos",
        "sexo" => "feminino",
        "idade" => 18
    ],
    [
        "nome" => "Jonas",
        "sobrenome" => "Sousa",
        "sexo" => "masculino",
        "idade" => 22
    ],
    [
        "nome" => "Ana Luisa",
        "sobrenome" => "Santana",
        "sexo" => "feminino",
        "idade" => 28
    ],
    [
        "nome" => "Paulo",
        "sobrenome" => "Soares",
        "sexo" => "masculino",
        "idade" => 19
    ]
];

echo "Programa para verificar a eligibilidade da pessoa, menor de 25 anos e do sexo feminino passou";

echo "<br/>";
echo "<br/>";

foreach ($pessoas as $pessoa) {
    $nome = $pessoa["nome"];
    $sexo = $pessoa["sexo"];
    $idade = $pessoa["idade"];
    $sobrenome = $pessoa["sobrenome"];

    if ($idade < 25 && $sexo == "feminino") {
        echo "$nome $sobrenome</br>Aceita<br/>";
    } else {
        echo "$nome $sobrenome</br>Não aceita<br/>";
    }
    echo "<br/>"; 
}

?>
