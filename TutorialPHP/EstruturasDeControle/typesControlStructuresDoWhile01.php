<?php
do {
    if ($i < 5) {
        echo "eu não sou grande o suficiente";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "eu estou bem";

    /* process i */

} while (0);
?>