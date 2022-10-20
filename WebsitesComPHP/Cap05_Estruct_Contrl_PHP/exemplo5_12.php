<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo5_12</title>
</head>
<body>
    
<?php 

   $i = 0;
   $k = 0;
   while($k < 10)
   {
      $i++;
      $k++;
      while($i < 20)
      {
         if($i == 10)
         {
            echo "<h3>Encerrando o primeiro while...</h3><br>";
            break;
            echo " <h3>Essa linha não vai ser impressa</h3>";
         }
         elseif($i == 15)
         {
            echo "<h3>encerrando os dois whiles...</h3>";
            break 2;
         }
         $i++;
      }
      
   }

?>

</body>
</html>



