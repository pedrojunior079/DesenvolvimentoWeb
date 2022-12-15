<?php
$message = 'Ola';

// Sem "use"
$example = function () {
    var_dump($message);
};
$example();

// Inherit $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Herdando valor da variável quando a função é definina,
// não quando é chamada
$message = 'bem vindo ao PHP';
$example();

// Reseta mensagem
$message = 'Ola';

// Herdando por referência
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// O valor modificado no escopo pai
// reflete quando a função é chamada
$message = 'bem vindo ao PHP';
$example();

// Closures também aceitam argumentos normais
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("Ola");

// Declaração de tipo de retorno após a instrução 'use'
$example = function () use ($message): string {
    return "Ola $message";
};
var_dump($example());
?>