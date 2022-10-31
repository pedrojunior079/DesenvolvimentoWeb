<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo12_2</title>
</head>
<body>
    
<?php
  include "conecta_pg.inc";
  $resultado = pg_query("SELECT * FROM produtos");
  $codigo = pg_result($resultado, 0, 0);
  $nome = pg_result($resultado, 0, "nome_produto");
  $preco = pg_result($resultado, 0, "preco");
  pg_close($conexao);
  echo "Código do produto: $codigo <br>";
  echo "Nome do produto: $nome <br>";
  echo "Preço do produto: $preco <br>";
?>

</body>
</html>

