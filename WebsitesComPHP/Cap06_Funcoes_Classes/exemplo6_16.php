<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
   /* no PHP é possivel criar métodos abstratos. Isso significa que o método
    * é apenas declarado, mas sua implementação não é fornecida.
    */
    abstract class ClasseAbstrata
    {
        abstract public function teste();
    }
    class ClasseImplementacao extends ClasseAbstrata
    {
        public function teste()
        {
            echo "<h3>Método teste() chamado!<br></h3>";
        }
    }
    $obj = new ClasseImplementacao();
    $obj->teste();
?>

</body>
</html>



