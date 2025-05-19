<?php 


$salarios = array("Joao" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "Salário de João é ". $salarios['Joao']. ". <br />";
echo "Salário de Pedro é ". $salarios['Pedro']. ". <br />";
echo "Salário de Maria é ". $salarios['Maria']. ". <br />";

$salarios['Joao'] = "Alto";
$salarios['Pedro'] = "Médio";
$salarios['Maria'] = "Baixo";


echo "Salário de João é ". $salarios['Joao']. ". <br />";
echo "Salário de Pedro é ". $salarios['Pedro']. ". <br />";
echo "Salário de Maria é ". $salarios['Maria']. ". <br />";
?>