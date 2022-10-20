<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo5_10</title>
</head>
<body>
    
<?php 

    $vetor = array(1, 2, 3, 4);
    foreach($vetor as $v)
    {
       print "<h3>O valor atual do vetor é $v. </h3><br>";
    }
    $a = array("<h3>um</h3>" => 1, "<h3>dois</h3>" => 2, "<h3>tres</h3>" => 3, "<h3>quatro</h3>" => 4);
    foreach($a as $chave => $valor){
       print "\$a[$chave] => $valor.<br>";
    }
       
?>

</body>
</html>



