<?php
include("./banco/adiciona-livro.php");
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/cadastrolivro.css">
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class= "cadastro-livro">
    <h1>Cadastro de livro</h1>

    <?php
    include("./formulario/formulario-livro.php");
?>
</div>
<?php
    include("footer.php");
    ?>
</body>

</html>