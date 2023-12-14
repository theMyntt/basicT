<?php
session_start();

$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    if ($_SESSION["NAME"] == "admin") {
        $query = "DELETE FROM USER WHERE ID_USER = :id";
        $statement = $db->prepare($query);
        $statement->bindParam(':id', $id);
       
        if ($statement->execute()) {
            echo "<script>alert('Usuário removido com sucesso!'); location.href='../';</script>";
        } else {
            echo "<script>alert('Ocorreu um erro ao remover o usuário.'); location.href='../';</script>";
        }
    } else {
        echo "<script>alert('Você não tem permissões para fazer isso.'); location.href='../';</script>";
    }
}
?>
