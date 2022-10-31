<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>executando12_6_mysql</title>
</head>
<body>
    
<?php
   include "conecta_mysql.inc";
   $resultado = $mysqli_query('SELECT * FROM produtos');
   $linha = mysqli_num_rows($resultado);
   for($i=0; $i<$linhas; $i++)
   {
      $resultado = mysqli_fetch_row($resultado);
      echo "Codigo do produto: $registro[0] <br>";
      echo "Nome do produto $registro[1] <br>";
      echo "Descrição: $registro[2] <br>";
      echo "Preço: $registro[3] <br>";
      echo "Peso: $registro[4] <br>";
      echo "Informações adicionais: $registro[7] <br><br>";
   }
   mysqli_close($conexao);
?>

</body>
</html>