<div class="form-genero">
    <form class="was-validated" action="banco/adicina-genero.php" method="GET">
        <div class="mb-3">
            <label for="genero" class="form-label">Informe um Genero</label>
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Ex: Comedia" required>
            <div class="invalid-feedback">
                Porfavor informe um genero.
            </div>
        </div>
        <div class="botao">
        <button type="submit" value="Cadastrar" class="btn btn-outline-success">Cadastrar <?php include("icons/salvar-icon.php"); ?></button>
        <a href="listar-genero.php"><button type="button" class="btn btn-outline-warning">Editar <?php include("icons/editar-icon.php"); ?></button></a>
        
        </div>

    </form>
</div>