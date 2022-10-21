<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_14</title>
</head>
<body>
    
<?php
   /* Classe private e protected
    * Utilizando as palavras "private e protected" podemos criar métodos ou
    * váriaveis privadas e protegidas em uma classe. Uma variavel primitiva 
    * só pode ser acessada pela proprian classe onde foi declarada, enquanto que
    * uma variável protegida poderá ser acessada também pelas subclasses da
    * claqsse onde ela foi declarada.
    */
    class Classe1
    {
        private $var1 = "<h3>Olá, var1!\n</h3>";
        protected $var2 = "<h3>Olá, var2!\n</h3>";
        protected $var3 = "<h3>Olá, var3!\n</h3>";
        function bomDia()
        {
            print "<h3>Classe1: ". $this->var1. "<br></h3>";
            print "<h3>Classe1: ". $this->var2. "<br></h3>";
            print "<h3>Classe1: ". $this->var3. "<br></h3>";
        }
    }
    class Classe2 extends Classe1
    {
        function bomDia()
        {
            Classe1::bomDia();      //Exibe
            print "<h3>Classe2: " . $this->var1. "<br></h3>";  //Não exibe nada
            print "<h3>Classe2: " . $this->var2. "<br><h3>";  //Exibe
            print "<h3>Classe2: " . $this->var3. "<br></h3>";  //Exibe
        }
    }
    $obj = new Classe1();
    $obj->bomDia();
    $obj = new Classe2();
    $obj->bomDia();

?>

</body>
</html>






