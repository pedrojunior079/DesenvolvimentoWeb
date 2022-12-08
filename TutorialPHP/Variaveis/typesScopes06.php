<?php
class A {
    function Z() {
        static $count = 0;       
        printf("%s: %d\n", get_class($this), ++$count);
    }
}

class B extends A {}

$a = new A();
$b = new B();
$a->Z();
$a->Z();
$b->Z();
$a->Z();
?>