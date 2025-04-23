<?php 

$salario = 5000.00; 

function calculoRenda(){

global $salario;

if($salario >  3036 && $salario < 3533.31){
	$pd = $salario*7.5/100;
	$sl = $salario - $pd; 
}

if($salario > 3533.32 && $salario < 4688.85){
	$pd = $salario*15/100;
	$sl = $salario - $pd; 
}

if($salario > 4688.86 && $salario < 5830.85 ){
	$pd = $salario*22.5/100;
	$sl = $salario - $pd; 
}

if($salario > 5830.85 ){
	$pd = $salario*27.5/100;
	$sl = $salario - $pd; 
}


} 






 ?>