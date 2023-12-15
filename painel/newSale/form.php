<?php
session_start();

$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prod = $_POST["products_data"];
    $price = $_POST["total_price"];
    $id = $_SESSION["ID"];

    $final = str_replace(" ", "\n<br/>", $prod);

    if(isset($_SESSION["ID"]) && !empty($_SESSION["ID"])) {
        $id = $_SESSION["ID"];
          
        $query = "INSERT INTO SALE (PR_SALE, USER_ID_USER, FP_SALE) VALUES (:final, :id, :price)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':final', $final);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':price', $price);
        $stmt->execute();

        echo "<script>alert('Venda computada com sucesso');location.href = '../'</script>";
    } else {
        echo "Erro: ID do usuário não encontrado na sessão.";
    }
}
?>