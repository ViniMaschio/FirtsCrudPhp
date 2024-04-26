<div class="form-livro">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Genero</th>
            <th scope="col">Editora</th>
            <th scope="col">Valor</th>
            <th scope="col" colspan="2">Descricao</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        include("banco/conecta-banco.php");
        $comando_sql = "select * from livro;";
        $busca_banco = mysqli_query($conecta_banco, $comando_sql);

        while ($linha = mysqli_fetch_assoc($busca_banco)) {
        ?>
            <tr>
                <th scope="row"><?php echo $linha["codlivro"]; ?></th>
                <th scope="row"><?php echo $linha["nomelivro"]; ?></th>

                <?php
                $comando_sql = "select * from genero where codgenero = {$linha["codgenero_fk"]}";
                $busca_nome = mysqli_query($conecta_banco, $comando_sql);
                $linha_nome = mysqli_fetch_assoc($busca_nome);
                ?>
                <th scope="row"><?php echo $linha_nome["nomegenero"]; ?></th>

                <?php
                $comando_sql = "select * from editora where codeditora = {$linha["codeditora_fk"]}";
                $busca_nome = mysqli_query($conecta_banco, $comando_sql);
                $linha_nome = mysqli_fetch_assoc($busca_nome);
                ?>
                <th scope="row"><?php echo $linha_nome["nomeeditora"]; ?></th>
                <th scope="row"><?php echo $linha["valor"]; ?></th>
                <th scope="row" colspan="2"><?php echo $linha["descricao"]; ?></th>

                <th scope="row">
                    <form action="editar-livro.php" method="GET">
                        <input type="hidden" name="codlivro" value="<?php echo $linha["codlivro"]; ?>">
                        <button type="submit" class="btn btn-outline-warning">Editar<?php include("icons/editar-icon.php"); ?></button>
                    </form>
                </th>
                <th scope="row">
                    <form action="banco/remove-livro.php" method="get">
                        <input type="hidden" name="codlivro" value="<?php echo $linha["codlivro"]; ?>">
                        <button type="submit" class="btn btn-outline-danger">Apagar <?php include("icons/deletar-icon.php"); ?></button>
                    </form>

                </th>

            </tr>
        <?php
        }

        ?>
    </tbody>

</table>
</div>