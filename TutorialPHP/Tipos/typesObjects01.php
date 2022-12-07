<?php
  class myNumber
  {
    public $value;
  }

  $arrayOfNumbers = array();
  $arrayItem = new myNumber();
  for($i = 0; $i<3; $i++){
      $arrayItem->value = $i;
      $arrayOfNumbers[] = $arrayItem;
  }

  var_dump($arrayOfNumbers);
?>