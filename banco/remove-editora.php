<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Editora</title>
</head>
<body>
    <?php
    include("conecta-banco.php");

    $varcodeditora = $_GET['codeditora'];
    $comando_sql = "delete from editora where codeditora = {$varcodeditora};";
    if(mysqli_query($conecta_banco, $comando_sql)){
        header("location: ../listar-editora.php");
    }
    else{
        ?>
         <p class = "alert alert-danger">Editora não deletado !!!</p>
        <?php
    }
    mysqli_close($conecta_banco);
    ?>
    
</body>
</html>