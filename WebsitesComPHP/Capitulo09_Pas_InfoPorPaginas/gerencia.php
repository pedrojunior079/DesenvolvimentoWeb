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