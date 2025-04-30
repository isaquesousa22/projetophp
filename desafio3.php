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

echo "Serão necessarios $cont anos para Juca passar Chico ";


 ?>