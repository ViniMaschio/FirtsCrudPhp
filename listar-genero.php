<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Genero</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/listar.css">
</head>
<body>
    <?php
    include("nav.php");
    ?>
    <div class = "listar-editora">
    <h1>Lista de Generos</h1>
    <?php
    include("formulario/formulario-listar-genero.php")
    ?>

    
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>