<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contato</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/contato.css">
</head>
<body>
	<?php include 'includes/header.php'?>
	<div class="d1">
		<div class="card">

			<div class="user">
				<div class="campo">
					<label class="titulo-campo-user">Nome</label>
					<input type="text" class="input-texto">
				</div>
				<div class="campo">
					<label class="titulo-campo-user">Cidade</label>
					<input type="text" class="input-texto">
				</div>
			</div>

			<div class="mensagem">
				<label class="titulo-campo-user">Mensagem</label>
				<textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
			</div>

			<div class="inter">
				<button id="envio">Enviar</button>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'?>
	<?php include 'includes/javascript.php'?>
	
</body>
</html>