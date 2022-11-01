<?php
// obtém os valores digitados
$username = $_POST["username"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_mysql.inc";
$result = $mysqli->query("SELECT * FROM usuarios where username='$username'");
$linhas = mysqli_num_rows($result);
if($linhas==0) // testa se a consulta retornou algum registro
{
   echo "<html><body>";
   echo "<p algin=\"center\"><a href=\"login.html\">Voltar</a></p>";
   echo "</body></html>";
}
else
{
    if($senha != $mysqli_result($result, 0, "senha")) //confere a senha
    {
        echo "<html><body>";
        echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
        echo "</body></html>";
    }
    else // usuarios e senhas ocrretos. vamos criar os cookies
    {
        setcookie("nome_usuario", $username);
        setcookie("senha_usuario", $senha);
        //direciona para a pagina inicial dos usuarios cadastrados
        header("Location: pagina_inicial.php");
    }
}
mysqli_close($conexao);
?>