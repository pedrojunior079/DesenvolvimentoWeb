<?php
/* exemplo 1 */

for ($i = 1; $i <= 10; $i++) {
    echo '<pre>';
    echo $i;
    echo '</pre>';
}

/* exemplo 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
    
}

/* exemplo 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo '<pre>';
    echo $i;
    echo '</pre>';
    $i++;
    
}

/* exemplo 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>