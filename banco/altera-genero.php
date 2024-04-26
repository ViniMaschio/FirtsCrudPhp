<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Genero</title>
</head>
<body>
    <?php
    include("conecta-banco.php");
    $varnomegenero = $_GET['genero'];
    $varcodgenero = $_GET['codgenero'];

    $comando_sql = "update genero set nomegenero = (upper('{$varnomegenero}')) where codgenero = {$varcodgenero}";
    
    
    if(mysqli_query($conecta_banco, $comando_sql)){
        header("location: ../listar-genero.php");
    }
    mysqli_close($conecta_banco);
    ?>
    
</body>
</html>