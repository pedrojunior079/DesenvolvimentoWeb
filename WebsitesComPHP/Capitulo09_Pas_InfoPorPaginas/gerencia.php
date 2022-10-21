<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerencia</title>
</head>
<body>
    
<?php 

    $operacao = $_POST["operacao"];
    if($operacao == "inclusao")
    {
        //realiza a inclusão
        echo "Produto incluido!";
    }
    elseif($operacao == "alteracao")
    {
        //realiza a alteração do produto
        echo "Produto alterado!";
    }
    elseif($operacao == "exclusao")
    {
        //realiza a exclusão do produto
        echo "Produto excluido";
    }
?>


</body>
</html>



