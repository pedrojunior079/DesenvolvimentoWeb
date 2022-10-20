<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo5_11</title>
</head>
<body>
    
<?php 

    $k = 1;
    while($k < 20)
    {
       if($vetor[$k] == "sair")
       {
          break;
       }
       echo $vetor[$k] . "<br>";
       $k++;
    }    

?>


</body>
</html>



