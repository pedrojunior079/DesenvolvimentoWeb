<?php
if(isset($_COOKIE["nome_usuario"]))
   $nome_usuario = $_COOKIE["nome_usuario"];
if(isset($_COOKIE["senha_usuario"]))
   $senha_usuario = $_COOKIE["senha_usuario"];   

if(!(empty($nome_usuario) OR empty($senha_usuario)))
{
    include "conecta_mysql.inc";
    $result = $mysqli->query("SELECT * FROM usuarios
       WHERE username='$nome_usuario'");
    if(mysqli_num_rows($result)==1)
    {
        if($senha_usuario != $mysqli_result($result, 0, "$senha"))
        {
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            echo "voce não efetuou o LOGIN!";
            exit;
        }
    }
    else
    {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        echo "Voce não efetuou o LOGIN!";
        exit;
    }   
}
else
{
    echo "voce não efetuou o LOGIN!";
    exit;
}
mysqli_close($conexao);
?>