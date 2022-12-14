<?php
for ($i = 0;$i<3;$i++) {
    echo "Start Of I loop\n";
    for ($j=0;;$j++) {
       
        if ($j >= 2) continue 2; // This "continue" applies to the "$i" loop
        echo "<pre>";
        echo "I : $i J : $j"."\n";
        echo "</pre>";
    }
    echo "End\n";
}
?>