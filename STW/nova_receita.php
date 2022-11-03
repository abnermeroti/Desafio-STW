
<h1>Nova Receita</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value = "cadastrar">
    <div class="mb-3">
        <label>Nome da receita</label>
        <br>
        <input type="text" name="nome_receita"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Nome do usuario</label>
        <br>
        <input type="text" name="nome_usuario"
        class="form-contol">   
    </div>
    <div class="mb-3">
        <label>ingredientes</label>
        <br>
        <input type="text" name="ingredientes"
        class="form-contol">   
    </div>
    <div class="mb-3">
        <label>previsto_kg</label>
        <br>
        <input type="text" name="previsto_kg"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <label>Data</label>
        <br>
        <input type="date" name="data"
        class="form-contol">   
    </div>
    <br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</form>