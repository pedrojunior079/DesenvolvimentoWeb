<?php
class ParentClass
{
}
class MyClass extends ParentClass
{
}

class NotMyClass
{
}
$a = new MyClass();

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
?>