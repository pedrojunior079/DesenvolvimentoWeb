<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo6_15</title>
</head>
<body>
   
<?php
    /* Uma classe pode conter também métodos privados ou protegidos. 
    */
    class Classe1
    {
        private function MetodoPrivado()
        {
            echo "<h3>Classe1::MetodoProtegido() chamado.<br></h3>";
        }
        protected function MetodoProtegido()
        {
            echo "<h3>Classe1::MetodoProtegido() chama.<br></h3>";
            $this->MetodoPrivado();
        }
    }
    class Classe2 extends Classe1
    {
        public function MetodoPublico()
        {
            echo "<h3>Classe2::MetodoPublico() chamado.<br></h3>";
            $this->MetodoProtegido();
        }
    }
    $obj = new Classe2;
    $obj->MetodoPublico();
?>

</body>
</html>


