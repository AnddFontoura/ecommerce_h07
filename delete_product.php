<?php

include_once('include/header.php');

if (!empty($_GET)) {
    $productId = $_GET['id'];

   include_once('include/connection.php');

    $query = "
        UPDATE 
            products 
        SET
            deleted_at = NOW() 
        WHERE 
            id = :productId
    ";

    $sql = $pdo->prepare($query);
    $sql->bindValue(":productId", $productId, PDO::PARAM_INT);
    $value = $sql->execute();

    if ($value == 1) {
        echo "<div class='alert alert-success'> Produto cadastrado com sucesso </div>";
    } else {
        echo "<div class='alert alert-danger'> Erro ao cadastrar o Produto </div>";
    }
}

include_once('include/footer.php');

?>
