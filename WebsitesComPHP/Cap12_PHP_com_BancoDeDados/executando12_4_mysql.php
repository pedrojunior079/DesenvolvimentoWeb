<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>executando12_4_mysql</title>
</head>
<body>
    
<?php
   include "conecta_mysql.inc";
   $result = $mysqli->query("SELECT * FROM produtos", MYSQLI_USE_RESULT);
   $linhas = mysqli_num_rows($result);
   mysqli_close($conexao);
   echo "<p align=\"center\">A consulta retornou $linhas registros!</p>"
?>

</body>
</html>