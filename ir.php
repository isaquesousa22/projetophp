<?php 

$salary = 3000.00; 
echo "Salário bruto: R$$salary";

function calculoRenda($salary){



 	if($salary >  2259.21 && $salary < 2826.65){
		$discount = $salary * (7.5/100);
		echo "<br/>";
	}

 	elseif($salary > 2826.66 && $salary < 3751.05){
		$discount = $salary * (15/100);
		echo "<br/>";
	}

	 else if($salary >  3751.06 && $salary < 4664.68 ){
		$discount = $salary * (22.5/100);	
		echo "<br/>";
	}

 	else if($salary > 4664.68 ){
		$discount = $salary * (27.5/100);
		echo "<br/>";
	}

	else {
		$discount = $salary * (27.5/100);
		$sal_liq = $salary - $discount; 
		echo "<br/>";

		$sal_liq = salary - $discount;
		return $sal_liq;
	}


}

$salarioLiquido = calculoRenda(salary);

function impress($r){
 return "salarioLiquido";
}


echo "<br/>";
	
 impress ($salarioLiquido); 





 ?>