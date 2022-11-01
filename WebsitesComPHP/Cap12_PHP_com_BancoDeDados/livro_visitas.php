<!DOCTYPE html>
<html lang="pt-br">
<body>
  <h1>Livro de visitas</h1>
  <?php
   $incluir = 0;
   if(isset($_POST["nome"]) && isset($_POST["cidade"]) 
      && isset($_POST(["estado"]) && isset($_POST["mensagem"]))
   {
      $nome = $_POST["nome"];
      $cidade = $_POST["cidade"];
      $estado = $_POST["estado"];
      $mensagem = $_POST["mensagem"];
      $incluir = 1;
    }
    
    if($db = sqlite_open('bdteste', 0666, $erro))
    {
        //grava a mensagem recebida
        if($incluir)
           sqlite_query($db, "INSERT INTO mensagens 
              VALUES ('$nome', '$cidade', '$estado', '$mensagem')");
        // exibe todas as mensagens
        $res =  sqlite_query($db, 'SELECT * ROM mensagem');
        $linhas = sqlite_num_rows($res);
        for($i=0; $i<$linhas; $i++)
        {
            $linhas = sqlite_num_rows($res);
            echo "<b>Nome</b>:".$linha["nome"]. "<br>";
            echo "<b>Cidade</b>:".$linha["cidade"]. "<br>";
            echo "<b>Estado</b>:".$linha["estado"]. "<br>";
            echo "<b>Mensagem</b>:".$linha["nmensagem"]. "<br>";
        }
        sqlite_close($db);       
    }
    else
        die($erro);   

    ?>
</body>
</html>