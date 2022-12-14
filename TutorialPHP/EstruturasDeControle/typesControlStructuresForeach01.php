<?php
$array = array(1, 2, 3, 4);
foreach($arr as $valor){
    $valor = $valor * 2;
}
// $arr agora é array(2, 4, 6, 8)

// sem um unset($valor), $valor continuará como referencia ao último item: $arr[3]

foreach($arr as $chave => $valor){
  // $arr[3] será atualizado com cada valor de $arr...
  echo "{$chave} => {$valor} ";
  print_r($arr); 
}
// ...até que, o segundo e o ultimo valor é copiado para o ultimo valor

// saida:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 ) 

?>