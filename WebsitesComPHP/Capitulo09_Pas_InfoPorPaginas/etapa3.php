<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p align="center"><big><big><strong>
        Cadastramento - Etapa 3 de 3</strong></big></big></p>
    <form method="POST" action="cadastra.php">
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>">
        <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
        <input type="hidden" name="profissao" value="<?php echo $profissao; ?>">
        <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
        <input type="hidden" name="endereco" size="<?php echo $endereco; ?>">
        <input type="hidden" name="cidade" size="<?php echo $cidade; ?>">
        <input type="hidden" name="estado" size="<?php echo $estado ?>">
        <input type="hiddden" name="cep" size="<?php echo $cep ?>">
        <div align="center"><center><p>
        Username:  <input type="text" name="username" size="10"></p></center></div>
        <div align="center"><center><p>
        Senha:  <input type="text" name="senha" size="10"></p></center></div>
        <div align="center"><center><p>
        Confirme sua senha:  <input type="text" name="confirma_senha" size="10"></p></center></div>
        <div align="center"><center><p>
        <input type="submit" value="Finalizar Cadastro" name="fim"></p></center></div>            
    </form> 
</body>
</html>