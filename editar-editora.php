<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Editora</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/cadastroeditora.css">
</head>

<body>

    <?php
    include("nav.php");
    include("banco/conecta-banco.php");

    $varcodeditora = $_GET['codeditora'];

    $comando_sql = "select * from editora where codeditora = {$varcodeditora}";
    $dados_banco =  mysqli_query($conecta_banco, $comando_sql);

    $linha = mysqli_fetch_assoc($dados_banco);
    mysqli_close($conecta_banco);
    ?>
    <div class = "cadastro-editora">
    <h1>Editar Editora</h1>
    <div class="form-editora">
        <form class="was-validated" action="banco/altera-editora.php" method="GET">
            <div class="mb-3">
                <input type="hidden" name="codeditora" value="<?php echo $varcodeditora ; ?>">
                <label for="editora" class="form-label">Informe uma Editora</label>
                <input type="text" class="form-control" id="editora" value="<?php echo $linha['nomeeditora']; ?>" name="editora" placeholder="Ex: Comedia" required>
                <div class="invalid-feedback">
                    Porfavor informe um genero.
                </div>
            </div>
            <div class="botao">
                <button type="submit" value="Cadastrar" class="btn btn-outline-warning">Alterar <?php include("icons/salvar-icon.php"); ?></button>

            </div>

        </form>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>