<!DOCTYPE html>
<html lang="pt-bre">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de livros</title>

    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/catalogo.css">

</head>

<body>

    <?php
    include("nav.php");
    include("banco/conecta-banco.php");

    ?>
    <section class="corpo">
    <div class="main">
    
        <h1>Catalogo de livros</h1>
        <br>
        <section class="catalogo-livros">
            <?php
            $comando_sql = "select * from livro;";
            $dados_banco = mysqli_query($conecta_banco, $comando_sql);

            while ($linha = mysqli_fetch_assoc($dados_banco)) {
            ?>
                <div id="livros" class="genero <?php echo $linha['codgenero_fk']; ?> editora<?php echo $linha['codeditora_fk']; ?> ">
                    <p class = "nome-livro"><?php echo $linha['nomelivro']; ?></p>
                    <figure></figure>
                    <img src="./image/<?php echo $linha['imagem']; ?>" id="foto" alt="Foto do livro">
                    <br>
                    <figcaption><?php echo $linha['descricao']; ?></figcaption>
                    </figure>
                    <hr>
                    <p>R$ <?php echo $linha['valor'];?> </p>
                </div>
            <?php
            }
            ?>
        </section>
        
    </div>
    <?php
    include("footer.php");
    ?>
    </section>
</body>

</html>