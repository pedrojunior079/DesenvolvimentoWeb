<?php

   /* Uma classe pode conter também métodos privados ou protegidos. 
    */
    class Classe1
    {
        private function MetodoPrivado()
        {
            echo "Classe1::MetodoProtegido() chamado.<br>";
        }
        protected function MetodoProtegido()
        {
            echo "Classe1::MetodoProtegido() chama.<br>";
            $this->MetodoPrivado();
        }
    }
    class Classe2 extends Classe1
    {
        public function MetodoPublico()
        {
            echo "Classe2::MetodoPublico() chamado.<br>";
            $this->MetodoProtegido();
        }
    }
    $obj = new Classe2;
    $obj->MetodoPublico();
?>