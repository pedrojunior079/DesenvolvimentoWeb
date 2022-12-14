<?php
foreach($arr as $key => $value){
  if(!($key % 2)){ // pula membros pares
    continue;
  }
  do_something_odd($value);
}

$i = 0;
while($i++ < 5){
    echo "Exterior<br/>\n";
    while(1){
        echo "Meio<br/>\n";
        while(1){
            echo "Interior<br/>\n";
            continue 3;
        }
        echo "Isso nunca obtém saída.<br/>\n";
    }
    
}
?>