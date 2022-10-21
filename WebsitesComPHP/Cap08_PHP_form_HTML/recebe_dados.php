<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebe_dados                                                               </title>
</head>
<body>
    <?php
        
        $username = $_POST["username"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $erro=0;
        if(strlen($username)<5)
        { echo "<h3>O username deve possuir no mínimo 5 caracteres.<br></h3>"; $erro=1; }
        if(strlen($senha)<5)
        { echo "<h3>A senha deve possuir no mínimo 5 caracteres.<br></h3>"; $erro=1; }
        if($username == $senha)
        { echo "<h3>O username e a senha devem ser diferentes.<br></h3>"; $erro=1; }
        if(empty($nome) OR strstr($nome, ' ')==FALSE)
        { echo "<h3>Favor digite seu nome corretamente.<br></h3>"; $erro=1; }
        if(strlen($email)<8 || strstr($email, '@')==FALSE)
        { echo "<h3>Favor digitar seu email corretamente.<br></h3>"; $erro=1;}
        if(empty($cidade))
        { echo "<h3>Favor digitar sua cidade.<br></h3>"; $erro=1; }
        if(strlen($estado)!=2)
        { echo "<h3>Favor digite seu estado corretamente.<br></h3>"; $erro=1; }
        if($erro==0)
        { echo "<h3>Todos os dados foram digitados corretamente!</h3>"; }
        

    ?>
</body>
</html>
