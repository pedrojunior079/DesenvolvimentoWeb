<?php

// Exemplo de função de callback
function minha_funcao_callback() {
    echo 'olá mundo!';
}

// Exemplo de método de callback
class MinhaClasse {
    static function meuMetodoCallback() {
        echo 'Olá Mundo!';
    }
}

// Tipo 1: Calback simples
call_user_func('minha_funcao_callback');

// Tipo 2: Chamada a métodos estáticos
call_user_func(array('MinhaClasse', 'meuMetodoCallback'));

// Tipo 3: Chamada a métodos de objetos
$obj = new MinhaClasse();
call_user_func(array($obj, 'meuMetodoCallback'));

// Tipo 4: Chamada a métodos estáticos
call_user_func('MinhaClasse::meuMetodoCallback');

// Tipo 5: Chamada relativa a métodos estáticos
class A {
    public static function quem() {
        echo "A\n";
    }
}

class B extends A {
    public static function quem() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::quem')); // A

// Type 6: Objetos que implementam __invoke podem ser utilizados como callables
class C {
    public function __invoke($nome) {
        echo 'Olá ', $nome, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');
?>