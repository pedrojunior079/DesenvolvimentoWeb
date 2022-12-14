<?php
$arr = array('um', 'dois', 'tres', 'quatro', 'parar', 'cinco');
foreach ($arr as $val) {
    if ($val == 'parar') {
        break;    /* Você também poderia escrever 'break 1;' aqui. */
    }
    echo "$val<br />\n";
}

/* Usando o argumento opcional. */

$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "No 5<br />\n";
            break 1;  /* Saia apenas do switch. */
        case 10:
            echo "No 10; desistir<br />\n";
            break 2;  /* Saia do switch e do while. */
        default:
            break;
    }
}
?>