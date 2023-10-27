
<?php
session_start();
include_once('conexao.php');


$seguranca = isset($_SESSION['ativa']) ? TRUE : header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Painel Login</title>
</head>
<body class="box">

<?php  
 if(isset($_SESSION['ativa'])) { ?>
 
    <h1>Painel Administrativo</h1>
  
    <h3>Bem Vindo <?php echo $_SESSION['nome']; ?></h3><br>
    
<a class="btn btn-danger" href="logout.php">Sair</a><br><br>

<a class="btn btn-danger" href="controle.php">Pagina de Controle</a><br><br>

<a class="btn btn-warning" href="controle_temp.php">Tabela Modelo</a>



<?php }

 ?>


</body>
</html>

