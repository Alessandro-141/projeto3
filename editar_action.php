<?php
include_once('conexao.php');
$id = filter_input(INPUT_POST, 'id');
$nome_categoria = filter_input(INPUT_POST, 'nome_categoria');
$comidas = filter_input(INPUT_POST, 'comidas');
$quantidade = filter_input(INPUT_POST, 'quantidade');
$data_entrada = filter_input(INPUT_POST, 'data_entrada');
$data_saida = filter_input(INPUT_POST, 'data_saida');

if($id && $nome_categoria && $comidas && $quantidade && $data_entrada && $data_saida) {

    $sql = $conn->prepare("UPDATE  produtos SET nome_categoria = :nome_categoria,
    comidas = :comidas, quantidade = :quantidade, data_entrada = :data_entrada, data_saida = :data_saida
   
    WHERE id = :id");
    
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome_categoria', $nome_categoria);
    $sql->bindValue(':comidas', $comidas);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':data_entrada', $data_entrada);
    $sql->bindValue(':data_saida', $data_saida);
    $sql->execute();
  
    header('Location: controle.php');
    exit; // Serve para desligar o direcionamento

}else {
    
    header('Location: controle.php');
    exit;
}
?>