<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Editora</title>
</head>
<body>
    <?php
    include("conecta-banco.php");
    $variaveleditora = $_GET["editora"];

    $sqlcomando = "insert into editora(nomeeditora) values (upper('{$variaveleditora}'));";

    if (mysqli_query($conecta_banco,$sqlcomando)){
        header("location: ../cadastro-editora.php");
    }
    else{
        ?>

        <p>Erro ao cadastrar o Editora, <?php echo $variaveleditora; ?></P>

    <?php
    }

   ?> 
</body>
</html>