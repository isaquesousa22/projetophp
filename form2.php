<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
		<form action="cadastro.php" method="POST">
			
			<h1>Escolha a lingugem</h1>
			<input type="checkbox" name="asp">ASP <br> 
			<input type="checkbox" name="php">PHP <br >
			<input type="checkbox" name="java">Java <br >

			<br>
		


		<h2>Estado civil</h2>

		<input type="radio" name="estado_civil" value="casado">Casado(a) <br>
		<input type="radio" name="estado_civil" value="Solteiro">Solteiro(a) <br>
		<br>
 
	 	<h2>inputs escondidas</h2>
 		<input type="hidden" name="user"value="admin"><br>
 		<input type="hidden" name="nivel"value="2"><br>
		
		<h2>Escolha um estado</h2>
		<select>name="estado">
			<option value="sp" > São Paulo</option>
			<option value="mg" > Minas Gerais </option>
			<option value="rj" > Rio de Janeiro </option>
			<option value="ba" > Bahia </option>
		</select>
		<br>
		<br>

		<h2>Deixe sua menssagem</h2>
		<textarea name="msg" cols="50" rows="8">
			

		</textarea>

		<input type="submit" name="enviar" value="Enviar">




		</form>
</body>
</html>