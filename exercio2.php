<?php 

$num1 = 14.0;
$num2= 35.0;
$num3 = 100.00;



 if($num1%2==0){
 	
 	echo "Ele é divisível por 2<br/>";

 }
 elseif ($num1%5==0) {
	
	echo "Ele é divisível por 5";

}
elseif ($num1%10==0){

	echo "Ele é divisível por 10";
}





 if( $num2%2==0){
 	
 	echo "Ele é divisível por 2";

 }
 elseif ($num2%5==0) {
	
	echo "Ele é divisível por 5<br/>";

}
elseif ($num2%10==0){

	echo "Ele é divisível por 10<br/>";
}



if( $num3%2==0 && $num3%10==0){
 	
 	echo "Ele é divisível por 2<br/>";
 	echo "Ele é divisível por 10<br/>";
}


 elseif ($num3%5==0) {
	
	echo "Ele é divisível por 5";

}
elseif ($num3%10==0){

	echo "Ele é divisível por 10<br/>";
}



 ?>
