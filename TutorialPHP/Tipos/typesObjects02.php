<?php
  class myNumber
  {
    public $value;
  }

  $arrayOfMyNumbers = array();
  $arrayItem = new myNumber();
  for($i = 0; $i<3; $i++){
      $arrayItem = new myNumber();
      $arrayItem->value = $i;
      $arrayOfMyNumbers[] = $arrayItem;
  }

  var_dump($arrayOfMyNumbers);
?>