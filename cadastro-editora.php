<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Editora</title>
    <?php
    include("link.php");
    ?>
    <link rel="stylesheet" href="./css/cadastroeditora.css">
</head>

<body>
    <section class="corpo">
    <?php
    include("nav.php");
    ?>
    <div class ="cadastro-editora">
        <h1>Cadastro de Editora</h1>
       <?php
       include("./formulario/formulario-editora.php");
       ?>
    </div>
    <?php
    include("footer.php");
    ?>
    </section>
</body>

</html>