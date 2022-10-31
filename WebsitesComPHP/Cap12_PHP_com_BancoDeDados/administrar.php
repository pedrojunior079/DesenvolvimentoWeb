<?php
$operacao = $_POST["operacao"];
include "conecta_mysql.inc";
if($operacao == "incluir")
{
    $codigo = $_POST["codigo"];
    $nome  = $_POST["nome"];
    $descricao  = $_POST["descricao"];
    $preco  = $_POST["preco"];
    $peso  = $_POST["peso"];
    $cc  = $_POST["cc"];
    $cs  = $_POST["cs"];
    $ad  = $_POST["ad"];
    $sql = "INSERT INTO produtos VALUES";
    $sql = "('$codigo','$nome','$descricao',$preco,$peso,$cc,$cs,'$ad')";
    $result = $mysqli->query($sql);
    echo "Produto incluido com sucesso!";
}
elseif($operacao == "excluir")
{
    $codigo = $_POST["codigo"];
    $sql = "DELETE FROM produtos WHERE codigo_produto=$codigo";
    $result = $mysqli->query($sql);
    $linhas = $mysqli->affected_rows();
    if($linhas == 1)
    {
        echo "Produto excluido com sucesso!";
    }
    else
    {
        echo "Produtos não encontrado!";
    }
}
elseif($operacao == "mostrar")
{
    $result = $mysqli->query("SELECT * FROM produtos", MYSQLI_USE_RESULT);
    $result = mysqli_num_rows($result);
    echo "<p><b>Lista de produtos da loja</b></p>";
    for($i=0; $i<$linhas; $i++)
    {
       $reg = $mysqli_fetch_row($result);
       echo "$reg[0] <br>$reg[1] <br>$[2] <br>$reg[3] <br>";
       echo "$reg[4] <br>$reg[5] <br>$reg[6] <br>$reg[7] <br><br>";
    }
}
mysqli_close($conexao);
?>