<?php 

$n1 = 5;
$n2 = 10;
$n3 = 9;

if($n1 > $n2 && $n1 > $n3){
	if($n2 < $n3){
		echo "$n1, $n3, $n2";
	}
	else{
		echo "$n1, $n2, $n3";
	}

}if($n2 > $n1 && $n2 > $n3){
	if($n1 < $n3){
		echo "$n2, $n3, $n1";
	}
	else{
		echo "$n2, $n1, $n3";
	}
}if($n3 > $n2 && $n3 > $n1){
	if($n2 < $n1){
		echo "$n3, $n1, $n2";
	}else{
		echo "$n3, $n2, $n1";
	}
}

	

	


 ?>