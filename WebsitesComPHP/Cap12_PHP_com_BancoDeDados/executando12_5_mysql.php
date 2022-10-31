<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>executando12_5_mysql</title>
</head>
<body>
    
<?php
   include "conecta_mysql.inc";
   $resultado = $mysqli_query('SELECT * FROM produtos');
   $codigo = $myolsqli_result($resultado, 0, 0);
   $nome = $mysqli_result($resultado, 0, "nome_produto");
   $preco = $mysqli_result($resultado, 0, "preco");
   mysqli_close($conexao);
   echo "<p align=\"center\">A consulta retornou $linhas registros!</p>"
?>

</body>
</html>