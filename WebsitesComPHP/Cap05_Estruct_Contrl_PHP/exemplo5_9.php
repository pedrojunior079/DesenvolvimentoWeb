<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo5_9</title>
</head>
<body>
    
<?php 

    $vetor[0][0] = "elemento00";
    $vetor[0][1] = "elemento01";
    $vetor[1][0] = "elemento10";
    $vetor[1][1] = "elemento11";
    for($i=0; $i<2; $i++)
    {
       for($k=0; $k<2; $k++)
       {
          echo "<h3>O elemento da posição $i, $k é </h3>";
          echo $vetor[$i][$k] . "<br>";
       }
    }    

?>

</body>
</html>




