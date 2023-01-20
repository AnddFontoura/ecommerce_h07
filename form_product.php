
<?php include_once('include/header.php'); ?>
    <div class="container">
        <form action="save_product.php" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mt-3">
                        <span>Nome do Produto</span>
                        <input type="text" name="productName" class="form-control"></input>
                    </div>

                    <div class="form-group mt-3">
                        <span>Apelido do Produto</span>
                        <input type="text" name="productNickName" class="form-control"></input>
                    </div>

                    <div class="form-group mt-3">
                        <span>SKU do Produto</span>
                        <input type="text" name="productSku" class="form-control"></input>
                    </div>

                    <div class="form-group mt-3">
                        <span>Imagem do Produto</span>
                        <input type="file" name="productImage" class="form-control"></input>
                    </div>

                    <div class="form-group mt-3">
                        <span>Preço do Produto</span>
                        <input type="number" name="productPrice" class="form-control"></input>
                    </div>
                </div>

                <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Enviar Formulário">
                    <input type="reset" class="btn btn-secondary" value="Limpar Formulário">
                </div>
            </div>
        </form>
    </div>

<?php include_once('include/footer.php'); ?>