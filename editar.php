<?php
include_once('conexao.php');


$id = filter_input(INPUT_GET, 'id');
// Se tiver um "id" vai consultar o banco.
if($id) {
    $sql = $conn->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    // Se deu certo vai voltar com um valor, vou verificar
    if($sql->rowCount() > 0){
        $produtos = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
    header('Location: controle.php');
    exit;
}

}else{
    header('Location: controle.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar produtos</title>
</head>
<body class="p-3 mb-2 bg-primary text-white">

<h1 class="edit">Editar produtos</h1>

<form method="POST" action="editar_action.php">
<input type="hidden" name="id" value="<?=$produtos['id'];?>"><br><br>
</label>   
<label>
    Nome Categoria: <input class="rad" type="text" name="nome_categoria" value="<?=$produtos['nome_categoria'];?>"><br><br>
</label>   
 
<label>
    Comidas: <input  class="rad" type="text" name="comidas" value="<?=$produtos['comidas'];?>"><br><br>
</label>   
<label>
    Quantidade: <input class="rad" type="text" name="quantidade" value="<?=$produtos['quantidade'];?>"><br><br>
</label>   
<label>
    Data de Entrada: <input class="rad" type="date" name="data_entrada" value="<?=$produtos['data_entrada'];?>"><br><br>
</label>   
<label>
    Data de Saida: <input class="rad" type="date" name="data_saida" value="<?=$produtos['data_saida'];?>"><br><br>
    
</label>   
<input class="rad" type="submit" value="Atualizar">

</form>

 
</body>
</html>
