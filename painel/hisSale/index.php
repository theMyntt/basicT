<?php $db = new PDO("sqlite:..//..//data//user.db"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css" />
    <script src="../../js/script.js" defer></script>
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
            <?php 
            $query = "SELECT * FROM SALE";
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
        </main>
    </div>
</body>
</html>