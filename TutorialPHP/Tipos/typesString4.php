<?php
$sucos = array("maçã", "laranja", "koolaid1" => "roxo");

echo "Ele bebeu um pouco de suco $sucos[0]".PHP_EOL;
echo "Ele bebeu um pouco de suco $sucos[1].".PHP_EOL;
echo "Ele bebeu um pouco de suco $sucos[koolaid1].".PHP_EOL;

class Pessoa
{
    public $john = "João Silva";
    public $jane = "Jane Smith";
    public $robert = "Roberto Anderson";

    public $smith = "Smith";
}

$pessoa = new pessoas();

echo "$pessoa->john bebeu um pouco de suco de $sucos[0].".PHP_EOL;
echo "$pessoa->john então disse olá para $pessoa->jane.".PHP_EOL;
echo "Esposa de $pessoa->john cumprimentou $pessoa->robert.".PHP_EOL;
echo "$pessoa->robert cumprimentou os dois $pessoa->smiths."; //Não vai funcionar
?>