<?php
  class A {
    private $A; // Transformado na chave '\0A\0A'
  }

  class B extends A {
    private $A; // Transformado na chave '\0B\0A'
    public $AA; // Transformado na chave 'AA'
  }

  var_dump((array) new B());
?>