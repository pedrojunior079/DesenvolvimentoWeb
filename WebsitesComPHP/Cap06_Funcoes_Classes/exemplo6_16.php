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
            echo "Método teste() chamado!<br>";
        }
    }
    $obj = new ClasseImplementacao();
    $obj->teste();
?>