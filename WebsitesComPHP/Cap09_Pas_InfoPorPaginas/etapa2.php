<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p align="center"><big><big>
    <strong>Cadastramento - Etapa 2 de 3</strong></big></big></p>
    <form method="POST" action="etapa3.php">
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>">
        <input type="hidden" name="profissao" value="<?php echo $profissao; ?>">
         <div align="center"><center><p>
        Telefone: <input type="text" name="telefone" size="20"></p></center></div>
        <div align="center"><center><p>
        Endereço: <input type="text" name="endereco" size="20"></p></center></div>
        <div align="center"><center><p>
        Cidade: <input type="text" name="cidade" size="20">&nbsp;&nbsp;
        Estado: <input type="text" name="estado" size="2"></p></center></div>
        <div align="center"><center><p>
        CEP: <input type="text" name="cep" size="20"></p></center></div>
        <div align="center"><center><p>
          <input type="submit" value="Prosseguir &gt;&gt" name="prosseguir"></p>
        </center></div>                
    </form> 
</body>
</html>