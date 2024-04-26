<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Genero</title>
</head>
<body>
    <?php
    include("conecta-banco.php");

    $varcodgenero = $_GET['codgenero'];
    $comando_sql = "delete from genero where codgenero = {$varcodgenero};";
    if(mysqli_query($conecta_banco, $comando_sql)){
        header("location: ../listar-genero.php");
    }
    else{
        ?>
         <p class = "alert alert-danger">Genero não deletado !!!</p>
        <?php
    }
    mysqli_close($conecta_banco);
    ?>
    
</body>
</html>