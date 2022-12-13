<?php
/*
 * Ignore essa primeira parte,
 * que é apenas para deixar a impressão mais limpa.
 */

//Usei echo "<pre></pre>"; para pre-formatar o texto na hora de visualizar no navegador
 
$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
EOH;


/*
 * Agora os exemplos
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "<pre>";
echo "\n Operador de bit E \n";
echo "</pre>";
foreach ($values as $value) {
    echo "<pre>";
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
    echo "</pre>";
}

echo "<pre>";
echo "\n Operador de bit OU inlusivo \n";
echo "</pre>";
foreach ($values as $value) {
    echo "<pre>";
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
    echo "</pre>";
}

echo "<pre>";
echo "\n Operador de bit OU Exclusivo (XOR) \n";
echo "</pre>";
foreach ($values as $value) {
    echo "<pre>";
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
    echo "</pre>";
}
?>