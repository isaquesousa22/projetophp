<?php 


$salario = 5000.00; 


function calculoRenda1($s){

	return($s*7.5/100); 
}



function calculoRenda2($s){

	return($s*15/100); 
}



function calculoRenda3($s){

	return($s*22.5/100); 
}



function calculoRenda4($s){

	return($s*27.5/100); 
}




if($salario < 3.036){



echo"Seu salário bruto é:  ".$salario;
echo"<br/>";
echo "Porcentagem de desconto: 0";
echo"<br/>";
echo" Valor descontado: 0";
echo"<br/>";
echo "Salário líquido a receber:  ".$salario;

}


else if($salario >=  3.036 && $salario <= 3533.31){

$resp = calculoRenda1($salario);
$sl = $salario - $resp;

echo"Seu salário bruto é:  ".$salario;
echo"<br/>";
echo "Porcentagem de desconto: 7,5%";
echo"<br/>";
echo" Valor descontado:  " .sprintf("%.02f", $resp) ;
echo"<br/>";
echo "Salário líquido a receber:  ".$sl;

}


else if($salario >=  3533.32 && $salario <= 4688.85){

$resp = calculoRenda2($salario);
$sl = $salario - $resp;

echo"Seu salário bruto é:  ".$salario;
echo"<br/>";
echo "Porcentagem de desconto: 15%";
echo"<br/>";
echo" Valor descontado:  " .sprintf("%.02f", $resp) ;
echo"<br/>";
echo "Salário líquido a receber:  ".$sl;

}


else if($salario >=  4688.86 && $salario <= 5830.85){

$resp = calculoRenda3($salario);
$sl = $salario - $resp;

echo"Seu salário bruto é:  ".$salario;
echo"<br/>";
echo "Porcentagem de desconto: 22.5%";
echo"<br/>";
echo" Valor descontado:  " .sprintf("%.02f", $resp) ;
echo"<br/>";
echo "Salário líquido a receber:  ".$sl;

}


else if($salario > 5830.86){

$resp = calculoRenda4($salario);
$sl = $salario - $resp;

echo"Seu salário bruto é:  ".$salario;
echo"<br/>";
echo "Porcentagem de desconto: 27.5%";
echo"<br/>";
echo" Valor descontado:  " .sprintf("%.02f", $resp) ;
echo"<br/>";
echo "Salário líquido a receber:  ".$sl;

}



 ?>