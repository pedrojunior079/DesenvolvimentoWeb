<?php
class foo{
    var $bar = 'Eu sou bar.';
    var $arr = array('Eu sou A.', 'Eu sou B.', 'Eu sou C.');
    var $r   = 'Eu sou r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "</br>";
echo $foo->{$baz[1]} . "</br>";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "</br>";

$arr = 'arr';
echo $foo->{$arr[1]} . "</br>";
?>