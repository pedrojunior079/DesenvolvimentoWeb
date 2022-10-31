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
 /* 
  * Renomei para executando_pg_php.php o exemplo12_2.php 
  */
  include "conecta_pg.inc";
  $sql = "SELECT * FROM produtos";
  $linhas = pg_affected_rows($resultado);
  $resultado = pg_query($conexao, $sql);
  pg_close($conexao);
  echo "<p align=\"center\">A consulta retornou $linhas registros!</p>"
?>

</body>
</html>

