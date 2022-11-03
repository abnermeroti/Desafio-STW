<h1>Editar Receita</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?> 
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value = "editar">
    <input type="hidden" name="id" value = "<?php print $row-> id; ?>">
    <div class="mb-3">
        <label>Nome da receita</label>
        <br>
        <input type="text" name="nome_receita" value="<?php print $row->nome_receita; ?>" class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Nome do usuario</label>
        <br>
        <input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>ingredientes</label>
        <br>
        <input type="text" name="ingredientes" value="<?php print $row->ingredientes; ?>" class="form-contol">   
    </div>
    <div class="mb-3">
        <label>previsto_kg</label>
        <br>
        <input type="text" name="previsto_kg" value="<?php print $row->previsto_kg; ?>" class="form-contol">   
    </div>
    <div class="mb-3">
        <label>Data</label>
        <br>
        <input type="date" name="data" value="<?php print $row->data; ?>"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</form>