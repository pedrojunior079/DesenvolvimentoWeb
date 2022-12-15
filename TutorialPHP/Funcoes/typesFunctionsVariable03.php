<?php
class Foo
{
    static $variable = 'propriedade estatica';
    static function Variable()
    {
        echo 'Método chamado';
    }
}

echo Foo::$variable; // Isto imprime 'propriedade estatica'. 
                     // Ele busca $variable no escopo da classe.
$variable = "Variable";
Foo::$variable(); // Isto chama $foo->Variable(), lendo a $variable no escopo da chamada.
                      

?>
