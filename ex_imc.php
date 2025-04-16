<?php 	

$altura = 1.75; 
$peso = 128;

function somaIMC($a, $p){

	return($p/ ($a*$a)); 
}

$resp = somaIMC($altura, $peso);

echo"O valor do seu imc é de:  " .sprintf("%.02f", $resp) ;


if ($resp < 18.5) {
	echo" Abaixo do peso normal";

}

else if($resp>= 18.5 && $resp<=24.9 ){
	echo" Peso normal";


}
else if ($resp>= 25.0 && $resp<=29.9 ){
	echo" Excesso de peso";
}
else if ($resp>= 30.0 && $resp<=34.9 ){
	echo" Obsidade classe 1";
}

else if($resp>= 35.0 && $resp<=39.9 ){
	echo" Obsidade classe 2";
}

else{
	echo" Obsidade classe 3";
}

echo"<br/>";
echo"<br/>";


echo"Tabela de IMC";
echo"<br/>";
echo"<br/>";

echo"Imc"; 
echo"<br/>";

echo"Menor que 18,5 Abaixo do peso normal";
echo"<br/>";
echo"18,5 - 24,9 Peso normal";


 ?>