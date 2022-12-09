<?php
echo "Usando Pre-incremento ++\$a:<br>";
$a = 1;
echo "\$a = $a<br>";
$b = ++$a;
echo "\$b = ++\$a, so \$b = $b and \$a = $a<br>";
echo "<br>";
echo "Usando Pos-incremento \$a++:<br>";
$a = 1;
echo "\$a = $a<br>";
$b = $a++;
echo "\$b = \$a++, so \$b = $b and \$a = $a<br>";
?>