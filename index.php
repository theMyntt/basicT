<? 
session_start(); 

if (isset($_SESSION["EMAIL"])) {
	header("Location: ./painel/");
	exit();
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>basicT</title>
	<link rel="stylesheet" href="css/materialize.min.css" />
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div id="wrapper">
		<nav class="blue darken-2">
			<div class="nav-wrapper">
				<div>
					<a href="./" class="brand-logo" style="margin-left: 1cm">basicT</a>
				</div>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="./"><img src="img/refresh.png" alt="Recarregar" style="display: flex; align-self: center;"></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<form method="post" action="login.php" id="login-form"
				style="">
				<div class="card-panel">
					<div class="input-control" style="display: block;">
						<label>Código de ID <input type="text" name="id" minlength="6" placeholder="Digite aqui seu ID!"
								required> </label> <br />
						<label>Senha <input type="password" name="pass" minlength="8"
								placeholder="Digite aqui sua senha!" required> </label> <br />
						<label>Entrar <input type="submit" class="btn waves-effect waves-light blue darken-2"
								value="Entrar" style="width:100%" /> </label>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>