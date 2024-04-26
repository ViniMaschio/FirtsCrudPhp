<div class="form-editora">
    <form class="was-validated" action="banco/adiciona-editora.php" method="GET">
        <div class="mb-3">
            <label for="editora" class="form-label">Informe um Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" placeholder="Ex: Abril" required>
            <div class="invalid-feedback">
                Porfavor informe uma editora.
            </div>
        </div>

        <div>
        <button type="submit" value="Cadastrar" class="btn btn-outline-success">Cadastrar<?php include("icons/salvar-icon.php"); ?></button>
        <a href="listar-editora.php"><button type="button" class="btn btn-outline-warning">Editar <?php include("icons/editar-icon.php"); ?></button></a>
        </div>
    </form>
</div>