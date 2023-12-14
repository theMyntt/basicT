<?php
session_start();

$caminhoAbsoluto = dirname(__FILE__) . '/../../data/user.db';
$db = new PDO("sqlite:$caminhoAbsoluto");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prod = $_POST["prod"];
    $price = $_POST["price"];
    $id = $_SESSION["ID"];

    $products = explode(" ", $prod);
    $final = '';

    foreach ($products as $product) {
        $final .= $product . " ";
    }
    echo $final;

    if(isset($_SESSION["ID"]) && !empty($_SESSION["ID"])) {
        $id = $_SESSION["ID"];
          
        $query = "INSERT INTO SALE (PR_SALE, USER_ID_USER, FP_SALE) VALUES (:final, :id, :price)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':final', $final);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':price', $price);
        $stmt->execute();

        echo "<script>location.href = '../'</script>";
    } else {
        echo "Erro: ID do usuário não encontrado na sessão.";
    }
}
?>
