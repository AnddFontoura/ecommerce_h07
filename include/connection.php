<?php
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
?>