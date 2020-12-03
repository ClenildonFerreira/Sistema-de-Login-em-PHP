<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lunelli</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="img">
			<img class="img" src="img/logo.png">
		</div>
		<div id="corpo_form">
			<h1>Acesso Restrito</h1>
			<form method="post" action="verif.php" name="form" AUTOCOMPLETE='OFF' onSubmit="return valida()">
				<input type="text" name="usu" placeholder="Usuário">
				<input type="password" name="senha" placeholder="Senha">
				<input type="submit" class="btn_entra" value="ENTRAR">
			</form>
		</div>
	</body>
</html>