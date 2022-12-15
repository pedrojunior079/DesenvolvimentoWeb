<?php
class Foo
{
    function MetodoVariavel()
    {
        $name = 'Bar';
        $this->$name(); // Isto chama o método Bar()
    }

    function Bar()
    {
        echo "Bar foi chamada!";
    }
}

$foo = new Foo();
$funcname = "MetodoVariavel";
$foo->$funcname(); // Isto chama $foo->MetodoVariavel()
?>
