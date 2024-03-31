<!DOCTYPE html>

<?php
$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../css/materialize.min.css" />
    <link rel="stylesheet" href="../../css/style.css">
	<title>basicT PDV</title>
</head>
<body>
	<div id="wrapper">
    <nav class="blue darken-2">
			<div class="nav-wrapper">
				<div>
					<a href="./" class="brand-logo" style="margin-left: 1cm">basicT</a>
				</div>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="../"><img src="../../img/home.png"></a></li>
					<li><a onclick="window.history.back();"><img src="../../img/arrowBack.png"></a></li>
					<li><a onclick="window.history.forward();"><img src="../../img/arrowFoward.png"></a></li>
					<li><a href="./"><img src="../../img/refresh.png" alt="Recarregar"></a></li>
				</ul>
			</div>
		</nav>
	<div class="container">
		<?php 
            $query = "SELECT ID_ACCESS AS 'Indentificador', USER_ID_USER AS 'Usuário que entrou', DT_ACCESS AS 'Data de acesso' FROM ACCESS";
            $stmt = $db->query($query);

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($rows) > 0 && $stmt !== false) {
                echo '<table>';
                echo '<tr>';
                foreach ($rows[0] as $columnName => $value) {
                    echo '<th>' . $columnName . '</th>';
                }
                echo '</tr>';

                foreach ($rows as $row) {
                    echo '<tr>';
                    foreach ($row as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'Não há dados a serem exibidos.';
            }
        ?>
        <button class="btn blue darken-2" onclick="window.history.back();">Voltar</button> 
	</div>
	</div>
</body>
</html>