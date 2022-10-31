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
    <strong>Cadastramento - Etapa 1 de 3</strong></big></big></p>
    <form method="POST" action="etapa2.php">
        <div align="center"><center><p>
        Nome: <input type="text" name="nome" size="20"></p></center></div>
         <div align="center"><center><p>
        Email: <input type="text" name="email" size="20"></p></center></div>
        <div align="center"><center><p>
        Data de nascimento: <input type="text" name="datanascimento" size="20"></p>
        </center></div>
        <div align="center"><center><p>
        Sexo: <input type="radio" valua="masculino" checked name="sexo">
        Masculino&nbsp;&nbsp;
        <input type="radio" name="sexo" value="feminino">Feminino</p></center></div>
        <div align="center"><center><p>
        Profissão: <input type="text" name="profissao" size="20"></p></center></div>
        <div align="center"><center><p>
          <input type="submit" value="Prosseguir &gt;&gt" name="prosseguir"></p>
        </center></div>                
    </form> 
</body>
</html>