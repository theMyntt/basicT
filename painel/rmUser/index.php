<?php 
session_start();

if (!isset($_SESSION["ID"])) {
	echo "<script>location.href='../exit'</script>";
}

$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/materialize.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
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
					<li><a href="../"><img src="../../img/home.png"></a></li>
					<li><a onclick="window.history.back();"><img src="../../img/arrowBack.png"></a></li>
					<li><a onclick="window.history.forward();"><img src="../../img/arrowFoward.png"></a></li>
					<li><a href="./"><img src="../../img/refresh.png" alt="Recarregar"></a></li>
				</ul>
			</div>
		</nav>
        <div class="container">
            <form action="process.php" method="post" style="margin-bottom: 30px">
                <h4>Qual usuário deseja excluir?</h4>
                <label> ID <input type="text" name="id" placeholder="Digite aqui o ID!" /> </label>
                <input type="submit" class="btn blue darken-2" value="remover" style="width: 100%">
            </form>
            <div class="card-panel">
            <?php 
            $query = "SELECT ID_USER AS 'Indentificador', NM_USER AS 'Nome do Usuário', CP_USER AS 'Telefone do usuário' FROM USER";
            $stmt = $db->query($query);

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($rows) > 0) {
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
            </div>
        </div>
    </div>
</body>
</html>