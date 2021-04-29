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
           if(isset(this->itens[$codigo]))
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
?>