<div class="form-livro">
<form class="form was-validated" action="" enctype="multipart/form-data" method="POST">
    <div class="mb-3">
        <label for="titulo" class="form-label">Informe o Titulo.</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Alto da Compadecida." required>
        <div class="invalid-feedback">
            Porfavor informe um titulo.
        </div>
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">Informe o Valor.</label>
        <input type="number" class="form-control" id="valor" name="valor" placeholder="Ex: 20,00." required min="0.00" max="10000.00" step="0.01">
        <div class="invalid-feedback">
            Porfavor informe um Valor.
        </div>
    </div>

    <div class="mb-3">
        <label for="genero">Selecione um genero.</label>
        <select class="form-select" id="genero" name="genero" required aria-label="select genero">
            <option value="">Selecionar</option>
            <?php


            $sqlcomando = "select * from genero";
            $busca_banco = mysqli_query($conecta_banco, $sqlcomando);

            while ($linha = mysqli_fetch_assoc($busca_banco)) {
            ?>
                <option value="<?php echo $linha["codgenero"]; ?>"><?php echo $linha["nomegenero"]; ?> </option>
            <?php
            }

            ?>
        </select>
        <div class="invalid-feedback">Por favor selecione um genero valido</div>
    </div>

    <div class="mb-3">
        <label for="editora">Selicione uma editora.</label>
        <select name="editora" id="editora" class="form-select" required aria-label="select editora">
            <option value="">Selecionar</option>
            <?php
            include("banco/conecta-banco.php");
            $sqlcomando = "select * from editora";
            $busca_banco = mysqli_query($conecta_banco, $sqlcomando);

            while ($linha = mysqli_fetch_assoc($busca_banco)) {
            ?>
                <option value="<?php echo $linha["codeditora"]; ?>"><?php echo $linha["nomeeditora"]; ?></option>
            <?php
            }
            mysqli_close($conecta_banco);
            ?>
        </select>
        <div class="invalid-feedback">Por favor selecione uma editora.</div>
    </div>

    <div class="mb-3">
        <label for="validationTextarea" class="form-label">Descrição.</label>
        <textarea maxlength="60" class="form-control" name="descricao" id="validationTextarea" placeholder="Ex: " required></textarea>
        <div class="invalid-feedback">
            Digite uma descrição.
        </div>
    </div>

    <div class="mb-3">
        <label for="imagem">Selecione a imagem.</label>
        <input type="file" class="form-control" id="imagem" name="imagem" value="" aria-label="imagem" required accept="image/png, image/gif, image/jpeg, image/webp" />
        <div class="invalid-feedback">Example invalid form file feedback</div>
    </div>
    <div>
        <button type="submit" name="cadastrar" class="btn btn-outline-success">Salvar <?php include("icons/salvar-icon.php"); ?></button>
        <a href="listar-livro.php"><button type="button" class="btn btn-outline-warning">Editar <?php include("icons/editar-icon.php"); ?></button></a>
    </div>
</form>
</div>