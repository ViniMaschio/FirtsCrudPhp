<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Editora</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        include("banco/conecta-banco.php");
        $comando_sql = "select * from editora order by codeditora;";
        $busca_banco = mysqli_query($conecta_banco, $comando_sql);

        while ($linha = mysqli_fetch_assoc($busca_banco)) {
        ?>
            <tr>
                <th scope="row"><?php echo $linha["codeditora"]; ?></th>
                <th scope="row"><?php echo $linha["nomeeditora"]; ?></th>
                <th scope="row">
                    <form action="editar-editora.php" method="GET">
                        <input type="hidden" name="codeditora" value="<?php echo $linha["codeditora"]; ?>">
                        <button type="submit" class="btn btn-outline-warning">Editar<?php include("icons/editar-icon.php"); ?></button>
                    </form>
                </th>
                <th scope="row">
                    <form action="banco/remove-editora.php" method="get">
                        <input type="hidden" name="codeditora" value="<?php echo $linha["codeditora"];?>">
                        <button type="submit" class="btn btn-outline-danger">Apagar <?php include("icons/deletar-icon.php"); ?></button>
                    </form>

                </th>

            </tr>
        <?php
        }

        ?>
         </tbody>
    </table>