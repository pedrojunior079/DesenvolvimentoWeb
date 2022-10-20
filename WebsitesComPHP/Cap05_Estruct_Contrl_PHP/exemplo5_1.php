<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>exemplo5_1</title>
</head>
<body>
   
<?php 

    $prova1 = 7;
    $prova2 = 5;
    $nota = ($prova1+$prova2) / 2;
    if($nota < 3)
       $desempenho = "<h3>Péssimo</h3>";
    elseif($nota < 5)
       $desempenho = "<h3>Ruim<h3>";
    elseif($nota < 7)
       $desempenho = "<h3>Médio</h3>";
    elseif($nota <9)
       $desempenho = "<h3>Bom</h3>";
    else
       $desempenho = "<h3>Excelente</h3>";
    echo "<h3>O seu desempenho foi $desempenho</h3>";    
?>

</body>
</html>





