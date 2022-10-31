<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo12_1</title>
</head>
<body>
    
<?php
   include "conecta_mysql.inc";
   $resultado = $mysqli_query('SELECT * FROM produtos');
   $linhas = mysqli_num_rows($resultado);
   mysqli_close($conexao);
   echo "<p align=\"center\">A consulta retornou $linhas registros!</p>"
?>

</body>
</html>