<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Genero</title>
    <?php
    include("conecta-banco.php");

    ?>


</head>

<body>
    <?php
    $variavelGenero =  $_GET["genero"];

    $sqlcomando = "insert into genero(nomegenero) values (upper('{$variavelGenero}'))";
    if (mysqli_query($conecta_banco, $sqlcomando)) {
    
        header("location: ../cadastro-genero.php");
        
    } else {
    ?>

        <p>Erro ao cadastrar o Genero, <?php echo $variavelGenero; ?></P>

    <?php
    }

    mysqli_close($conecta_banco);
    ?>
</body>

</html>