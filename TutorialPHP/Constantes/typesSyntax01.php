<?php
// Valor escalar simples
const CONSTANT = 'Ola Mundo';

echo CONSTANT;

// Expressão escalar
const ANOTHER_CONST = CONSTANT. '; Adeus Mundo';
echo ANOTHER_CONST;

const ANIMALS = array('cachorro', 'gato', 'passaro');
echo ANIMALS[1]; // imprime "gato"

// Array constante
define('ANIMALS', array(
    'cachorro',
    'gato',
    'passaro'
));
echo ANIMALS[1]; //imprime "gato"
?>