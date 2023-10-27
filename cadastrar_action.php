<?php

include_once ('conexao.php');
?>

<?php

$nome_categoria = filter_input(INPUT_POST, 'nome_categoria');
$comidas = filter_input(INPUT_POST, 'comidas');
$quantidade = filter_input(INPUT_POST, 'quantidade');
$data_entrada = filter_input(INPUT_POST, 'data_entrada');
$data_saida = filter_input(INPUT_POST, 'data_saida');


if($nome_categoria && $comidas && $quantidade && $data_entrada && $data_saida){
   
    $sql= $conn->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id); // Alterei :nome_categoria
    $sql->execute();
    // Caso não esteja cadastrado executa este comando de bloco abaixo.
    if($sql->rowCount() === 0) {
        $sql = $conn->prepare("INSERT INTO produtos(nome_categoria, comidas, quantidade, data_entrada, data_saida)
        VALUES(:nome_categoria, :comidas, :quantidade, :data_entrada, :data_saida)");
        $sql->bindValue(':nome_categoria', $nome_categoria);
        $sql->bindValue(':comidas',$comidas);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':data_entrada', $data_entrada);
        $sql->bindValue(':data_saida', $data_saida);
        $sql->execute();
       
         header('Location: controle.php');
        $exit;
    }else {
        header('Location: cadastrar.php');
    }

}else{
        header('Location: cadastrar.php');
    $exit;
}
?>