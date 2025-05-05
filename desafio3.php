<?php 

$user1 = "Chico";
$altc = 1.50;
$user2 = "Joca";
$altj = 1.10;
$cont = 0;


while ($altj < $altc){

    $altc += 0.02;
	$altj += 0.03; 
	$cont++;
}

echo "Chico tem 1,50 e cresce 2 centímetros por ano, enquanto juca tem 1,10m e cresce 3 centímetros por ano, </br>";

echo "nisso serão necessarios $cont anos para Juca passar Chico ";


 ?>