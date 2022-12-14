<?php
echo"\n";
echo"\n";

    for ( $i = 0; $i < 5; $i++ ) {

        switch ($i)
        {

            case 0:
                echo $i . "b";
                continue;
                echo $i . "a";
            case 1:   
                echo $i . "b";
                continue 2;
                echo $i . "a";
            case 2:   
                echo $i . "b";
                break;
                echo $i . "a";
            case 3:
                echo $i . "b";
                break 2;
                echo $i . "a";
            case 4:
                echo $i;
           
        }

        echo 9;

    }

echo"\n";
echo"\n";
?>