<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>executando12_2_pg</title>
</head>
<body>
    
<?php
  include "conecta_pg.inc";
  $resultado = pg_query("SELECT * FROM produtos");
  $linhas = pg_affected_rows($resultado);
  for($i=0; $i<$linhas; $i++)
  {
    $nome = pg_result($resultado, 0, "nome_produto");
    $preco = pg_result($resultado, 0, "preco");
    echo "Nome do produto $nome <br>";
    echo "Preço $preco <br>";
  }
  pg_close($conexao);
?>

</body>
</html>

