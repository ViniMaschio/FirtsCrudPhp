<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Genero</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/listar-livro.css">
</head>
<body>
    <?php
    include("nav.php");
    ?>
    <div class="listar-livro">
    <h1>Lista de livros</h1>
    <?php
    include("formulario/formulario-listar-livro.php")
    ?>

    
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>