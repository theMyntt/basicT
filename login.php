<?php
session_start();

include "./db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$id = $_POST["id"];
	$pass = $_POST["pass"];

	$query = "SELECT * FROM USER WHERE ID_USER = :id AND PW_USER = :pass";

	$stmt = $db->prepare($query);
	$stmt->bindParam(":id", $id);
	$stmt->bindParam(":pass", $pass);
	$stmt->execute();
	
	//$stmt = $db->query($query);

	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if ($rows == null) {
		echo "
		<p>ID ou Senha incorreta</p>
		<p>Voltando em alguns segundos</p>
		<script>
		setTimeout(() => {
			window.history.back()
		}, 2000)
		</script>";
	}
	else if ($rows[0]["ID_USER"] == $id && $rows[0]["PW_USER"] == $pass) {
		$_SESSION["NAME"] = $rows[0]["NM_USER"];
		$_SESSION["ID"] = $id;

		$db->query("UPDATE USER SET LG_USER = DATE('NOW') WHERE ID_USER = $id");
		//$stmp->bindParam(":id", $id);

		echo "<script>location.href = './painel/'</script>";
	}
}

?>

