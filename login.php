<?php

include "./db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$id = $_POST["id"];
	$pass = $_POST["pass"];

	$query = "SELECT * FROM USER WHERE ID_USER = :id AND PW_USER = :pass";

	$stmt = $db->prepare($query);
	$stmt->bindParam(":id", $id);
	$stmt->bindParam(":pass", $pass);
	$stmt->execute();
		  
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if ($rows == NULL) {
		echo "
		<p>ID ou Senha incorreta</p>
		<p>Voltando em alguns segundos</p>
		<script>
		
		setTimeout(() => {
			window.history.back()
		}, 2000)</script>";
	}
	else if ($rows[0]["ID_USER"] === $id && $rows[0]["PW_USER"] === $pass) {
		echo "<script>location.href = './painel/'</script>";
	}
}

?>

