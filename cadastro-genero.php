<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Genero</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/cadastrogenero.css">
</head>

<body>

    <?php
    include("nav.php");
    ?>
    <div class="cadastro-genero">
        <h1>Cadastro de Genero</h1>
        <?php
        include("./formulario/formulario-genero.php");
        ?>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>