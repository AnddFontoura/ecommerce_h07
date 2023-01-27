<?php

include_once('include/header.php');

if (!empty($_POST)) {
    $productName = $_POST['productName'] ?? null;
    $productNickName = $_POST['productNickName'] ?? null;
    $productPrice = $_POST['productPrice'] ?? null;
    $productSku = $_POST['productSku'] ?? null;
    $productId = $_GET['id'];

   include_once('include/connection.php');

    $query = "
        UPDATE 
            products 
        SET
            name = :name, 
            nickname = :nickname, 
            price = :price,
            sku = :sku
        WHERE 
            id = :productId
    ";

    $sql = $pdo->prepare($query);
    $sql->bindValue(":name", $productName, PDO::PARAM_STR);
    $sql->bindValue(":nickname", $productNickName, PDO::PARAM_STR);
    $sql->bindValue(":price", $productPrice, PDO::PARAM_INT);
    $sql->bindValue(":sku", $productSku, PDO::PARAM_STR);
    $sql->bindValue (":productId", $productId, PDO::PARAM_INT);
    $value = $sql->execute();

    if ($value == 1) {
        echo "<div class='alert alert-success'> Produto cadastrado com sucesso </div>";
    } else {
        echo "<div class='alert alert-danger'> Erro ao cadastrar o Produto </div>";
    }
}

include_once('include/footer.php');

?>
