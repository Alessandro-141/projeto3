


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar produtos</title>
</head>
<body class="p-3 mb-2 bg-success text-white">

    <h1>Cadastrar produtos</h1>
    
    <div class="d-flex flex-column bd-highlight mb-3">
    <form  method="POST" action="cadastrar_action.php">
    <label >
        Nome dos produtos: <input type="text" name="nome_categoria"/><br><br>
    </label>
    <label>
        Comidas: <input type="text" name="comidas"/><br><br>
    </label>
    <label>
        Quantidade: <input type="text" name="quantidade"/><br><br>
    </label>
    <label>
        Data de Entrada: <input type="date" name="data_entrada"/><br><br>
    </label>
    <label>
        Data de Saida: <input type="date" name="data_saida"/><br><br>
    </label>
    <input type="submit" value="Salvar"/>
    
    </form>
    </div>

    
    
</body>
</html>
