<?php
session_start();

try {
    $db = new PDO("sqlite:data/user.db");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die(); // Exit if connection fails
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $query = "SELECT * FROM USER WHERE ID_USER = :id AND PW_USER = :pass";

    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":pass", $pass);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die(); // Exit if query execution fails
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($rows)) {
        echo "
        <p>ID ou Senha incorreta</p>
        <p>Voltando em alguns segundos</p>
        <script>
        setTimeout(() => {
            window.history.back()
        }, 2000)
        </script>";
    } else {
        $_SESSION["NAME"] = $rows[0]["NM_USER"];
				$_SESSION["EMAIL"] = $rows[0]["EM_USER"];
        $_SESSION["ID"] = $id;

        try {
            $insert_query = $db->prepare("INSERT INTO ACCESS(USER_ID_USER, USER_NM_USER, DT_ACCESS) VALUES (:id, :name, DATE('now'))");
            $insert_query->bindParam(":id", $id);
            $insert_query->bindParam(":name", $_SESSION["NAME"]);
            $insert_query->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die(); // Exit if insertion fails
        }

        header("Location: ./painel/");
        exit(); // Exit after redirection
    }
}

?>
