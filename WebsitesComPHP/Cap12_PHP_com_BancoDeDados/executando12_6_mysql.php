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
      $nome = $mysqli_result($resultado, 0, "nome_produto");
      $preco = $mysqli_result($resultado, 0, "preco");
      echo "Nome do produto $nome <br>";
      echo "Preço: $preco <br>";
   }
   mysqli_close($conexao);
?>

</body>
</html>