<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_13</title>
</head>
<body>
    
<?php
   /* Exemplo de uma classe chamada Loja, que faz o controle dos artigos
    * disponiveis, possibilitando inclusive controlar a inserção ou remoção
    * de novos artigos por meio de funções definidas internamente.
    */
    class Loja
    {
        var $itens;
        function adiciona($codigo, $quantidade)
        {
            if(isset($this->itens[$codigo]))
               $this->itens[$codigo] += $quantidade;
            else
               $this->itens[$codigo] = $quantidade;   
        }
        function remove($codigo, $quantidade)
        {
            if($this->itens[$codigo] > $quantidade)
            {
                $this->itens[$codigo] -= $quantidade;
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    $estoque = new Loja;

    $estoque->adiciona("bermuda",2);
    $estoque->adiciona("camiseta",3);
    echo "<h3>A loja já possui " . $estoque->itens["bermuda"] . " bermudas.</h3><br>";
    echo "<h3>A loja já possui " . $estoque->itens["camiseta"] . " camisetas.</h3><br>";

?>

</body>
</html>




