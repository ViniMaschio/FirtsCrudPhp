<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar livro</title>
    <?php
    include("link.php");
    include("banco/conecta-banco.php");

    ?>
    <link rel="stylesheet" href="./css/cadastrolivro.css">
</head>

<body>
    <?php
    include("nav.php");
    $varcodlivro = $_GET['codlivro'];
    $comando_sql = "select * from livro where codlivro = {$varcodlivro}";
    $busca_livro = mysqli_query($conecta_banco, $comando_sql);
    $livro =  mysqli_fetch_assoc($busca_livro);
    ?>
    <div class="cadastro-livro">

    <h1>Editar Livro</h1>
    <div class="form-livro">
    <form class="was-validated form" action="banco/alterar-livro.php" enctype="multipart/form-data" method="GET">
        <div>
            <input type="hidden" name="codlivro" value="<?php echo $livro['codlivro']; ?>">
        </div>

        <div class="mb-3">
            <label for="nomelivro" class="form-label">Informe o Titulo.</label>
            <input type="text" class="form-control" id="nomelivro" name="nomelivro" value="<?php echo $livro['nomelivro']; ?>" placeholder="Ex: Alto da Compadecida." required>
            <div class="invalid-feedback">
                Porfavor informe um titulo.
            </div>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Informe o Valor.</label>
            <input type="number" class="form-control" id="valor" value="<?php echo $livro['valor']; ?>" name="valor" placeholder="Ex: 20,00." required min="0.00" max="10000.00" step="0.01">
            <div class="invalid-feedback">
                Porfavor informe um Valor.
            </div>
        </div>

        <div class="mb-3">
            <label for="genero">Selecione um genero.</label>
            <select class="form-select" id="genero" name="genero" required aria-label="select genero">
                <option value="">Selecionar</option>
                <?php
                $selected = "selected";

                $sqlcomando = "select * from genero";
                $busca_banco = mysqli_query($conecta_banco, $sqlcomando);
                $num1 = $livro["codgenero_fk"];
                while ($linha = mysqli_fetch_assoc($busca_banco)) {
                    $num2 = $linha['codgenero'];
                ?>

                    <option <?php if ($num1 == $num2) {
                                echo $selected;
                            } ?> value="<?php echo $linha["codgenero"]; ?>"><?php echo $linha["nomegenero"]; ?> </option>
                <?php
                }
                ?>
            </select>
            <div class="invalid-feedback">Por favor selecione um genero valido</div>
        </div>

        <div class="mb-3">
            <label for="editora">Selicione uma editora.</label>
            <select name="editora" id="editora" class="form-select" required aria-label="select editora">
                <option value="">Selecionar</option>
                <?php
                include("banco/conecta-banco.php");
                $sqlcomando = "select * from editora";
                $busca_banco = mysqli_query($conecta_banco, $sqlcomando);

                $num3 = $livro["codeditora_fk"];
                while ($linha = mysqli_fetch_assoc($busca_banco)) {
                    $num4 = $linha['codeditora'];
                ?>
                    <option <?php if ($num3 == $num4) {
                                echo $selected;
                            } ?> value="<?php echo $linha["codeditora"]; ?>"><?php echo $linha["nomeeditora"]; ?></option>
                <?php
                }
                mysqli_close($conecta_banco);
                ?>
            </select>
            <div class="invalid-feedback">Por favor selecione uma editora.</div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Descrição.</label>
            <textarea maxlength="60" class="form-control" name="descricao" id="validationTextarea" placeholder="Ex: " required><?php echo $livro['descricao']; ?></textarea>
            <div class="invalid-feedback">
                Digite uma descrição.
            </div>
        </div>


        <div>
            <button type="submit" name="cadastrar" class="btn btn-outline-warning">Alterar <?php include("icons/salvar-icon.php"); ?></button>

        </div>
    </form>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>