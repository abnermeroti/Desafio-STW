<h1>Lista de Receitas</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>nome_receita</td>";
        print "<th>nome_usuario</td>";
        print "<th>ingredientes</td>";
        print "<th>previsto_kg</td>";
        print "<th>data</td>";
        print "<th>acoes</td>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome_receita."</td>";
            print "<td>".$row->nome_usuario."</td>";
            print "<td>".$row->ingredientes."</td>";
            print "<td>".$row->previsto_kg."</td>";
            print "<td>".$row->data."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>


                    <button onclick=\"
                    if(confirm('tem certeza que deseja excluir?')){location.href ='?page=salvar&acao=excluir&id=".$row->id."';}
                    else{false;}\"
                    class='btn btn-danger'>Excluir</button>
            
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<p class='alert alert-danger'>Nao encontrou resultados </p>";
    }