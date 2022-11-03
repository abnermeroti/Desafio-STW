
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_receita = $_POST["nome_receita"];
            $nome_usuario = $_POST["nome_usuario"];
            $ingredientes = $_POST["ingredientes"];
            $previsto_kg = $_POST["previsto_kg"];
            $data = $_POST["data"];

            $sql = "INSERT INTO usuarios (nome_receita, nome_usuario, ingredientes, previsto_kg, data) VALUES ('{$nome_receita}', '{$nome_usuario}', '{$ingredientes}', '{$previsto_kg}', '{$data}')";

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('cadastrado com sucesso'); </script> ";
                print "<script>location.href='?page=listar_receita';</script>";
            }
            else{
                print"<script> alert('nao foi possivel cadastrar'); </script> ";
                print "<script>location.href='?page=listar_receita';</script>";
            }
        break;
        case 'editar':
            $nome_receita = $_POST["nome_receita"];
            $nome_usuario = $_POST["nome_usuario"];
            $ingredientes = $_POST["ingredientes"];
            $previsto_kg = $_POST["previsto_kg"];
            $data = $_POST["data"];

            $sql = "UPDATE usuarios SET 
                        nome_receita='{$nome_receita}',
                        nome_usuario='{$nome_usuario}',
                        ingredientes = '{$ingredientes}',
                        previsto_kg='{$previsto_kg}',
                        data='{$data}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('editado com sucesso'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                print"<script> alert('nao foi possivel editar'); </script> ";
                print "<script>location.href='?page=listar_receita';</script>";
            }
        break;
        case 'excluir':
            $sql="DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script> alert('excluido com sucesso'); </script> ";
                print "<script>location.href='?page=listar';</script>";
            }
            else{
                print"<script> alert('nao foi possivel excluir'); </script> ";
                print "<script>location.href='?page=listar_receita';</script>";
            }
        break;
        
        default:
            # code...
            break;
    }
?>
    