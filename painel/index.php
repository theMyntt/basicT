<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>basicT</title>
	<link rel="stylesheet" href="../css/style.css" />
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
			<h2>Bem vindo ao basicT</h2>
			<fieldset>
				<legend>Menu</legend>
				<div class="grid-column">
					<button class="choice">Nova venda</button>
					<button class="choice" onclick="location.href = '../'">Sair</button>
					<button class="choice" onclick="location.href = '../'">Sair</button>
					<button class="choice" onclick="location.href = '../'">Sair</button>
					<button class="choice" onclick="location.href = '../'">Sair</button>
				</div>
			</fieldset>
			
		</main>
	</div>
	
</body>

<script>
	const back = document.getElementById("back");
	const go = document.getElementById("go");
	const refresh = document.getElementById("refresh");

	back.addEventListener("click", () => { window.history.back(); });
	go.addEventListener("click", () => { window.history.forward(); });
	refresh.addEventListener("click", () => { location.reload(); });

</script>

</html>