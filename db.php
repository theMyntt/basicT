<?php
try {
	$db = new PDO("sqlite:data//user.db");
}catch (PDOExecption $e) {
	echo $e->getMessage();
}
?>