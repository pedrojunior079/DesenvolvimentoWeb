<?php
$x = 4;
// esta linha pode resultar em uma saida inesperada:
echo "x menos um é igual a " . $x-1 . ", ou assim eu espero\n";
// porque é avaliada como esta linha:
echo (("x menos um é igual a " . $x) - 1) . ", ou assim eu espero\n";
// a precedencia desejada pode ser aplicada utilizando parenteses:
echo "x menos um é igual a " . ($x-1) . ", ou assim eu espero\n";
?>