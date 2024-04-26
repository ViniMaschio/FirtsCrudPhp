<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Livro</title>
</head>
<body>
    <?php
    include("conecta-banco.php");
    $varcodlivro = $_GET['codlivro'];

    $comando_sql = "delete from livro where codlivro = {$varcodlivro};";

    if(mysqli_query($conecta_banco, $comando_sql)){
        header("location: ../listar-livro.php");
    }

    mysqli_close($conecta_banco);
    ?>
</body>
</html>