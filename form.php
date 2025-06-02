<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Formulário PHP</h1>
	<form action="#" method="POST">
		<br>
		<label for = "nome"> Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Insira seu nome" maxlength="50" required autocomplete="off">
			<br>

		<label for = "email" > E-mail:</label>

		<input type="email" name="email" id = "email" placeholder="Insira seu e-mail" maxlength="50" required autocomplete="off">
		<br>
		<input type="submit" name="enviar" = value="Entrar">
		
		<input type="reset" name="limpar" = value= "Limpar">

	</form>
</body>
</html>