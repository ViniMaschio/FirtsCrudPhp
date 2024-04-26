<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Genero</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/cadastrogenero.css">
</head>

<body>

    <?php
    include("nav.php");
    include("banco/conecta-banco.php");

    $varcodgenero = $_GET['codgenero'];

    $comando_sql = "select * from genero where codgenero = {$varcodgenero}";
    $dados_banco =  mysqli_query($conecta_banco, $comando_sql);

    $linha = mysqli_fetch_assoc($dados_banco);
    mysqli_close($conecta_banco);
    ?>
    <div class =  "cadastro-genero">
    <h1>Editar Genero</h1>
    <div class="form-genero">
        <form class="was-validated" action="banco/altera-genero.php" method="GET">
            <div class="mb-3">
                <input type="hidden" name="codgenero" value="<?php echo $varcodgenero ; ?>">
                <label for="genero" class="form-label">Informe um Genero</label>
                <input type="text" class="form-control" id="genero" value="<?php echo $linha['nomegenero']; ?>" name="genero" placeholder="Ex: Comedia" required>
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