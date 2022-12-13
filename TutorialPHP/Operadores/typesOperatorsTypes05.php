<?php
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b é umn objeto da classe MyClass
var_dump($a instanceof $c); // $c é uma string 'MyClass'
var_dump($a instanceof $d); // $d é uma string 'NotMyClass'
?>