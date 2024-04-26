<?php
include("banco/conecta-banco.php");

if (isset($_POST['cadastrar'])) {

    

    $varname = $_POST['titulo'];
    $varvalor= $_POST['valor'];
    $vargenero = $_POST['genero'];
    $vareditora = $_POST['editora'];
    $vardescicao =  $_POST['descricao'];
    
    
    $nomeimagem = $_FILES['imagem']["name"];
    $tempimagem = $_FILES["imagem"]["tmp_name"];
    $pastaimagem = "./image/".$nomeimagem;
    
    $sqlcomando = "insert into livro(nomelivro,codgenero_fk,codeditora_fk,valor,descricao,imagem) values (upper('$varname'),$vargenero,$vareditora,$varvalor,'$vardescicao','$nomeimagem');";
    
    if (mysqli_query($conecta_banco,$sqlcomando)){
        
        move_uploaded_file($tempimagem, $pastaimagem);
        header("location: ./cadastro-livro.php");
        
    }

    mysqli_close($conecta_banco);

    

}
?>