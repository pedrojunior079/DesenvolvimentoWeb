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
    $registro = pg_fetch_row($resultado);
    echo "Código do produto: $registro[0] <br>";
    echo "Nome do produto $registro[1] <br>";
    echo "Descrição: $registro[2] <br>";
    echo "Preço $registro[3] <br>";
    echo "Peso: $registro[4] <br>";
    echo "Informações adicionais: $registro[7] <br><br>";
  }
  pg_close($conexao);
?>

</body>
</html>

