<?php
// só funciona no php 8.0 em diante, não funciona no php 7.4
declare(strict_types = 1);

$args = [
    'information' => ['filter'  => FILTER_CALLBACK,  'options' => Example::callIt('someFunction', 'world', 2022)],
];

$unfiltered_data = ['information' => 'Hello'];

$filtered_data = filter_var_array($unfiltered_data, $args);

if(false === $filtered_data) {
    echo "Error...", PHP_EOL;
}

echo var_export($filtered_data, true);
?>