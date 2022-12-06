<?php
/*Exemplo de uma string
distribuida em varias linhas
utilizando a sintaxe heredoc.
*/

/* Exemplo mais complexo, com variáveis */
class foo
{
    var $foo;
    var $bar;
   
    function foo()
    {
        $this->foo = 'foo';
        $this->bar = array('bar1', 'bar2', 'bar3');
    }
}

$foo = new foo();
$name = 'PedroJr';

echo <<<EOT
Meu nome é "$name". Eu estou imprimendo $foo->foo.
Agora, eu estou imprimindo {$foo->bar[1]}.
Isto deve imprimnir um 'A' maiusculo: \x41    
EOT;