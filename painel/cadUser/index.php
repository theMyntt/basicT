<?php
session_start();

if (!isset($_SESSION["ID"])) {
	echo "<script>location.href='exit'</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/materialize.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<title>Document</title>
</head>

<body>
	<div id="wrapper">
		<nav class="blue darken-2">
			<div class="nav-wrapper">
				<div>
					<a href="./" class="brand-logo" style="margin-left: 1cm">basicT</a>
				</div>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="./"><img src="../../img/home.png"></a></li>
					<li><a onclick="window.history.back();"><img src="../../img/arrowBack.png"></a></li>
					<li><a onclick="window.history.forward();"><img src="../../img/arrowFoward.png"></a></li>
					<li><a href="./"><img src="../../img/refresh.png" alt="Recarregar"></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<form method="post" action="process.php">
				<h4>Que tal registrar um novo usuario?</h4>
				<div class="card-panel">
					<div class="input-control" style="display: block;">
						<label>Nome <input type="text" name="name" minlength="6"
								placeholder="Digite o nome do usuário a ser cadastrado" required> </label> <br />
						<label>Senha <input type="password" name="pass" minlength="8"
								placeholder="Digite a senha do usuário a ser cadastrado" required> </label> <br />
						<label>Telefone <input type="text" name="cp" minlength="8"
								placeholder="Digite o telefone do usuário a ser cadastrado" required> </label> <br />
						<label>Cadastrar <input type="submit" class="btn waves-effect waves-light blue darken-2"
								value="Cadastrar" style="width:100%" /> </label>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>