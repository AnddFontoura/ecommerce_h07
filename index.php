
<?php include_once('include/header.php'); ?>

<?php
    include_once('include/connection.php');
    
    $query = "
        SELECT 
            *
        FROM
            products
        ORDER BY
            id desc
    ";

    $sql = $pdo->prepare($query);
    $sql->execute();
    $resultArray = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> SKU </th>
                    <th> Preço </th>
                    <th> Opções </th>
                </tr>
            </thead>

            <tbody>
                <?php
                /*
                    foreach($resultArray as $data) {
                        echo "
                            <tr>
                                <td> " . $data['name'] . " </td>
                                <td> " . $data['sku'] . " </td>
                                <td> " . $data['price'] . " </td>
                                <td> 
                                    <a class='btn btn-warning' href='form_product.php?id={$data['id']}'> Editar </a>
                                </td>
                            </tr>
                        ";
                    }
                */
                    for($i = 0; $i < count($resultArray); $i++) {
                        echo "
                            <tr>
                                <td> " . $resultArray[$i]['id'] . " </td>
                                <td> " . $resultArray[$i]['name'] . " </td>
                                <td> " . $resultArray[$i]['sku'] . " </td>
                                <td> R$ " . number_format($resultArray[$i]['price'], 2, ',', '.') . " </td>
                                <td> 
                                    <a class='btn btn-warning' href='form_product.php?id={$resultArray[$i]['id']}'> Editar </a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>


<?php include_once('include/footer.php'); ?>