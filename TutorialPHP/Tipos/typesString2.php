<?php
class foo
{
    public $foo;
    public $bar;
   
    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<'EOT'
Meu nome é "$nome". Eu estou imprimendo alguns $foo->foo.
Agora, eu estou imprimindo alguns {$foo->bar[1]}.
Isto não deve imprimnir um 'A' maiusculo: \x41    
EOT;