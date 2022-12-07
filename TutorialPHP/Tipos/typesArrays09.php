<?php
  class A
  {
    private $B;
    protected $C;
    public $D;
    function __construct()
    {
        $this->{1} = null;
    }
  }
  
  var_dump((array) new A());
?>