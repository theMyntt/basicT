<?php session_start(); ?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/style.css" />
	<script src="../js/script.js" defer></script>
	<title>basicT</title>
</head>
<body>
	<div id="wrapper">
		<aside>
			<h2 style="font-weight: 200">basicT PDV</h2> <br />
			<nav>
				<ul>
					<li><span id="refresh">Recarregar a pagina</span></li>
					<li><span id="back">Voltar</span></li>
					<li><span id="go">Ir para frente</span></li>
				<ul>
			</nav>
		</aside>
		<main>
			<h2>Bem vindo, <?php echo $_SESSION["NAME"]; ?></h2>
			<fieldset>
				<legend>Menu</legend>
				<div class="grid-column">
					<button class="choice" onclick="location.href = './newSale/'">Nova venda</button>
					<button class="choice" onclick="location.href = './hisSale/'">Histórico de Vendas</button>
					<button class="choice">Histórico de Acessos</button>
					<button class="choice" onclick="location.href = '../'">Sair</button>
				</div>
			</fieldset>
		</main>
	</div>
	
</body>

</html>