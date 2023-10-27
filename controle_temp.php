
  

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/estilo.css">
  <title>Bootstrap com php</title>
</head>
<body>
<p id="compara">Tabela Comparativa</p>
<?php
include_once ("conexao1.php");
  
$result = mysqli_query($connect,"SELECT * FROM parametros ");

 /* Aqui pega só os campos da tabela */
   echo "<table border='1' >
   <tr> 
  <th>id_categoria</th>
  <th>categoria</th>
  <th>comida</th>
  <th>geladeira_4ºC_ou_abaixo</th>
  <th>congelador_menos_18ºC_ou_abaixo</th>
  
  </tr>";
  /* Aqui pega o conteúdo da tabela */
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo '<td >'.$row['id_categoria'].'</td>';
    echo '<td >'.$row['categoria'].'</td>';
    echo "<td>".$row['comida'] . "</td>";
    echo "<td>" . $row['geladeira_4ºC_ou_abaixo'] . "</td>";
    echo '<td>'.$row['congelador_menos_18ºC_ou_abaixo'].'</td>';
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($connect);
?>
<div id="compara" >
<a href="index.php">Voltar para página inicial</a>
</div>
</body>
</html>

