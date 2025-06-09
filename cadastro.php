<?php 

echo "Você escolheu a linguagem: ";

	if(isset($_POST['asp'])){
		echo ("- asp");
		echo "<br>";
	}

	if(isset($_POST['php'])){
		echo ("- php");
		echo "<br>";
	}

	if(isset($_POST['java'])){
		echo ("- java");
		echo "<br>";
	}

	echo "<br>";


	if (isset($_POST["estado_civil"])) {
		echo "Seus estado civil é ";
		echo $_POST["estado_civil"] . "<br>";
	}

		echo "Recuperando valores das inputs escondidas: <br/>";

		$user = $_POST['user'];
		$nivel = $_POST['nivel'];
		echo "<br> Seu usuário é $user e seu nível é $nivel <br>";


 		echo "<br>Recuperando estados selecionados: <br/";

 		echo "<br> O estado escolhido: " . $_POST['estado']. "<br>";



 	    echo "<br>Recuperando menssagem: <br/";
 	    echo "<br> Sua menssagem: " . $_POST['msg']. "<br>";

 
 ?>