<?php
session_start();

$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nameUser = $_POST["name"];
    $pass = $_POST["pass"];
    $cp = $_POST["cp"];

    if ($_SESSION["NAME"] == "admin") {
        $query = "INSERT INTO USER(PW_USER, NM_USER, CP_USER, LG_USER) VALUES (:pass, :nameUser, :cp, '0000-00-00')";
        $statement = $db->prepare($query);
        $statement->bindParam(':pass', $pass);
        $statement->bindParam(':nameUser', $nameUser);
        $statement->bindParam(':cp', $cp);

        if ($statement->execute()) {
            echo "<script>alert('Usuário cadastrado com sucesso!'); location.href='../';</script>";
        } else {
            echo "<script>alert('Ocorreu um erro ao cadastrar o usuário.'); location.href='../';</script>";
        }
    } else {
        echo "<script>alert('Você não tem permissões para fazer isso.'); location.href='../';</script>";
    }
}
?>
