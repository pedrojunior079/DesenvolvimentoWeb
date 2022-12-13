<?php
$increment = $preIncrement = $postIncrement = 1;
echo $increment.' - '.$preIncrement.' - '.$postIncrement;
echo '<br>';
echo ($increment+1).' - '.(++$preIncrement).' - '.($postIncrement++);
echo '<br>';
echo ($increment+1).' - '.(++$preIncrement).' - '.($postIncrement++);
echo '<br>';
echo ($increment+1).' - '.(++$preIncrement).' - '.($postIncrement++);
?>