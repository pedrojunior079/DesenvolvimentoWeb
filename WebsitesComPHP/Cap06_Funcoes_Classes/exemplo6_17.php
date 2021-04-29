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
            print "Este é o construtor da classe<br>";
        }
    }
    class SubClasse extends Classe
    {
        function __construct()
        {
            parent::__construct();
            print "Este é o construtor da SubClasse<br>";
        }
    }
    $obj = new Classe();
    $obj = new SubClasse();

?>