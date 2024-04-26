<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Editora</title>
</head>
<body>
    <?php
    include("conecta-banco.php");
    $varnomeeditora = $_GET['editora'];
    $varcodeditora = $_GET['codeditora'];

    $comando_sql = "update editora set nomeeditora = (upper('{$varnomeeditora}')) where codeditora = {$varcodeditora}";
    
    
    if(mysqli_query($conecta_banco, $comando_sql)){
        header("location: ../listar-editora.php");
    }
    mysqli_close($conecta_banco);
    ?>
    
</body>
</html>