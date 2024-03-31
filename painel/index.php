<?php session_start(); 

if (!isset($_SESSION["ID"])) {
	echo "<script>location.href='./exit'</script>";
}

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/materialize.min.css" />
	<link rel="stylesheet" href="../css/style.css">
	<title>basicT</title>
</head>
<body>
	<div id="wrapper">
		<nav class="blue darken-2">
			<div class="nav-wrapper">
				<div>
					<a href="./" class="brand-logo" style="margin-left: 1cm">basicT</a>
				</div>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="./"><img src="../img/home.png"></a></li>
					<li><a onclick="window.history.back();"><img src="../img/arrowBack.png"></a></li>
					<li><a onclick="window.history.forward();"><img src="../img/arrowFoward.png"></a></li>
					<li><a href="./"><img src="../img/refresh.png" alt="Recarregar"></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h4>Bem vindo, <?php echo $_SESSION["NAME"]; ?></h4>
			<div class="card-panel">
				<h5>Menu rápido</h5>
				<div class="row">
					<button class="btn blue darken-2" onclick="location.href = 'newSale/'">Nova venda</button>
					<button class="btn blue darken-2" onclick="location.href = 'hisSale/'">Histórico de Vendas</button>
					<button class="btn blue darken-2" onclick="location.href = 'hisLogin/'">Histórico de Acessos</button>
				</div>
			</div>
			<div class="card-panel">
				<h5>Configurações do sistema</h5>
				<div class="row">
					<button class="btn blue darken-2" onclick="location.href='hisUser/'">Ver usuários já existentes</button>
					<button class="btn blue darken-2" onclick="location.href='cadUser/'">Cadastrar usuário</button>
					<button class="btn blue darken-2" onclick="location.href='rmUser/'">Deletar usuário existente</button>
					<button class="btn red" onclick="location.href = 'exit/'">Sair</button>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>