<?php  

$m_a = 180;
$me_a = 150;
$m_f = 160;
$s_f = "feminino";
$s = "Masculino";

$i_m = 25;
$i_f = 20;

$cont = 0;

$soma = $m_a + $me_a + $m_f;
$media = $soma / 3


 while ($cont != 3){
	if ($m_a > $me_a){
		echo "$m_a, $me_a";
	}
	echo "A media da Altura feminina é $media";
	echo "Homem mais velho tem $i_m anos e a Mulher mais nova tem $i_f anos";
}



 ?>

