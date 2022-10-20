<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo5_13</title>
</head>
<body>
    
<?php 

   $vetor = array(1, 3, 5, 8, 11, 12, 15, 20);
   for($i=0; $i<sizeof($vetor); $i++)
   {
      if($vetor[$i] % 2 != 0)
      {
         continue;
      }
      $num_par = $vetor[$i];
      echo "<h3>O número $num_par é par. </h3><br>";
   }  

?>


</body>
</html>


