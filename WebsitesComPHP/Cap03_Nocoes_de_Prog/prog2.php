<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Prog2</title>
    <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.css">
   <link rel="stylesheet" href="/WebsitesComPHP/src/bootstrap.min.js">
</head>
<body>
<?php 


    $data_de_hoje = date("d/m/Y", time());
    

?>
<p align="center">Hoje é dia <?php echo $data_de_hoje; ?></p>
</body>
</html>

