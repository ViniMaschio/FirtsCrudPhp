<?php
include("conecta-banco.php");
$varcodlivro = $_GET['codlivro'];
$varnomelivro = $_GET['nomelivro'];
$varvalor = $_GET['valor'];
$varcodgenero = $_GET['genero'];
$varcodeditora = $_GET['editora'];
$vardescricao = $_GET['descricao'];

$comando_sql = "update  livro set nomelivro = (upper('{$varnomelivro}')), codgenero_fk = $varcodgenero ,codeditora_fk = $varcodeditora ,valor = $varvalor,descricao = '{$vardescricao}' where codlivro = {$varcodlivro}";

if(mysqli_query($conecta_banco,$comando_sql)){
    header("location: ../listar-livro.php");
}

mysqli_close($conecta_banco);
?>