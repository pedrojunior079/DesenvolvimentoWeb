<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_17</title>
</head>
<body>
    
<?php
   /*  Um construtor consiste em um método que será chamado toda vez que for 
    *  criado um objeto da classe onde ele foi declarado. Portanto, pode ser utilizado
    *  para inicializar um objeto antes dele ser usado. Ao contrario das versãoes anteriores,
    *  onde o construtor deveria possuir o mesmo nome da classe, a partir do PHP 5 en diante esse 
    *  método deve ser criado com o nome __construct().   
    */
    class Classe
    {
        function __construct()
        {
            print "<h3>Este é o construtor da classe<br></h3>";
        }
    }
    class SubClasse extends Classe
    {
        function __construct()
        {
            parent::__construct();
            print "<h3>Este é o construtor da SubClasse<br></h3>";
        }
    }
    $obj = new Classe();
    $obj = new SubClasse();

?>

</body>
</html>


