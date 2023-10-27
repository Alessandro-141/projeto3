

<?php
require_once "./function.php";
include_once ('conexao1.php');

if(isset($_POST['acessar'])) {
    login($connect);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulario de acesso</title>
</head>
<body class="body-true">

    <form action="" method="POST">
        <fieldset>
            <legend id="pag">Página de login</legend>
            <input type="email" name="email" placeholder="E-mail" required><br><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <input type="submit" name="acessar" value="Acessar">
        </fieldset>

    </form>
</html>