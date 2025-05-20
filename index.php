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

foreach ($pessoas as $pessoa) {
    $n = $pessoa["nome"];
    $s = $pessoa["sexo"];
    $i = $pessoa["idade"];
    $sn = $pessoa["sobrenome"];

    if ($i < 25 && $s == "feminino") {
        echo "$n $sn</br>Aceita<br/>";
    } else {
        echo "$n $sn</br>Não aceita<br/>";
    }
    echo "<br/>"; 
}

?>
