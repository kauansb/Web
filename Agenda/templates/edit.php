<?php
    include_once("header.php");
?>
<div class="container">
    <?php include_once("backbtn.php"); ?>
    <h1 id="main-title">Editar Contato</h1>
 <form id="create-form" action="<?=$BASE_URL?>/../config/processamento.php"
    method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?=$onlyContato['id']?>">
    <div class="form-group">
        <label for="nome">Nome do contato:</label>
        <input type="text" class="form-control" id="nome" name="nome"
        placeholder="digite o nome" value="<?=$onlyContato['nome']?>"required>
    </div>
    <div class="form-group">
        <label for="fone">Telefone de contato:</label>
        <input type="text" class="form-control" id="fone" name="fone"
        placeholder="digite o telefone" value="<?=$onlyContato['telefone']?>" required>
    </div>
    <div class="form-group">
        <label for="observacao">Observação:</label>
        <input type="text" class="form-control" id="observacao" name="observacao"
        value="<?=$onlyContato['observacao']?>" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Atualizar</button>
 </form>
</div>
<?php
    include_once("footer.php");
?>
