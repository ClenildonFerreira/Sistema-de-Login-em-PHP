<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Lunelli Nordeste</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>
		<div class="box_login">
				<div class="capa">
					<div class="img_logo">	
					</div>
				</div>

				<h1>Faça seu login</h1>
				<form>
					<input type="text" name="Usuario" placeholder="Usuário">
					<input type="password" name="Senha" placeholder="Senha">

					<select name="setor">
						<option value="informatica">Informática</option>
						<option value="Gestão_de_pessoas">Gestão de Pessoas</option>
						<option value="Expedição">Expedição</option>
						<option value="Portaria">Portaria</option>
					</select>

					<button class="btn-login">ENTRAR</button>
					<span class="msg_erro"><i class="fa fa-exclamation-triangle" style="color: #FFC600; font-size: 18px; padding-right: 5px"></i>

Usuario ou senha incorreto</span>
				</form>
		</div>

	</body>
</html>