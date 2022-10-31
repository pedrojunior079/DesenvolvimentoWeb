<?php
$str_conexao = "dbname=bdteste port5432 user=postgres password=admin123"
if(!(!$conexao=pg_connect($str_conexao)))
{
    echo "Não foi possivel estabelecer uma conexao com o banco de dados.";
    exit;
}
?>