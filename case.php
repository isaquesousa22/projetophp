<?php 

$op = 0;


print("1 - banana <br/>
	2- maça  <br/>
	3 - melancia  <br/>
	4 - uva  <br/>
	5- sair  <br/>
	A sua escolha foi correta ");

 switch ($op){
 	case 1:
 	  echo "você gosta de banana";
    break;

	case 2:
 	  echo "você gosta de maçâ";
    break;
	
    case 3:
 	  echo "você gosta de melancia";
    break;

    case 4:
 	  echo "você gosta de uva";
    break;

    default:
 	  echo "Sair";
    break;

}

 ?>