<?php

include_once('include/header.php');

if (!empty($_POST)) {
    $productName = $_POST['productName'] ?? null;
    $productNickName = $_POST['productNickName'] ?? null;
    $productPrice = $_POST['productPrice'] ?? null;
    $productSku = $_POST['productSku'] ?? null;

    $dbName = "ecommerce";
    $dbHost = "localhost";
    $dbConnection = "mysql:dbname=" . $dbName . ";host=" . $dbHost;
    $dbUser = "root";
    $dbPassword = "";
    $dbOptions = [
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    ];

    try {
        $pdo = new PDO($dbConnection, $dbUser, $dbPassword, $dbOptions);
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'> " . $e->getMessage() . "</div>";
    }

    $query = "
        INSERT INTO 
            products 
                (name, nickname, price, sku) 
        VALUES 
            (:name, :nickname, :price, :sku)
    ";

    $sql = $pdo->prepare($query);
    $sql->bindValue(":name", $productName, PDO::PARAM_STR);
    $sql->bindValue(":nickname", $productNickName, PDO::PARAM_STR);
    $sql->bindValue(":price", $productPrice, PDO::PARAM_INT);
    $sql->bindValue(":sku", $productSku, PDO::PARAM_STR);
    $value = $sql->execute();

    if ($value == 1) {
        echo "<div class='alert alert-success'> Produto cadastrado com sucesso </div>";
    } else {
        echo "<div class='alert alert-danger'> Erro ao cadastrar o Produto </div>";
    }
}

include_once('include/footer.php');

?>
