<?php
include_once('conexao.php');
$lista = [];
$sql = $conn->query("SELECT * FROM produtos");
if($sql->rowCount() > 0) {
    
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_C/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-primary text-white">
<h1>Controle de Estoque e Validade dos Produtos</h1>
<table border="1">

    <tr>
        <th>ID</th>
        <th>Nome_Categoria</th>
        <th>Comidas</th>
        <th>Quantidade</th>
        <th>Data de Entrada</th>
        <th>Data de Saida</th>
        <th>Cadastrar</th>
        <th>Editar</th>
        <th>Excluir</th>
        
    </tr>
    <?php foreach($lista as $produtos):?>
        <tr>
        <td><?=$produtos['id'];?></td>
        <td><?=$produtos['nome_categoria'];?></td>
        <td><?=$produtos['comidas'];?></td>
        <td><?=$produtos['quantidade'];?></td>
        <td><?=$produtos['data_entrada'];?></td>
        <td><?=$produtos['data_saida'];?></td>

<td>

            <a href="cadastrar.php?id=<?=$produtos['id'];?>">
            <img class="del" src="IMG/checklist.png">
           
    </a>
        </td>    
        
        <td>
            <a href="editar.php?id=<?=$produtos['id'];?>">
            <img class="del" src="IMG/pen.png"></a>
        </td>    

        <td>
            <a class='trash3' href="excluir.php?id=<?=$produtos['id'];?> ">
            <img class="del" src="IMG/bin.png"></a>
        </td>
        </tr>

    <?php endforeach; ?>



</table>

<div  class="btn">
<a href="index.php">Voltar para página inicial</a>
</div>
</body>
</html>
    

