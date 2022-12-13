<?php
//Usei echo "<pre></pre>"; para pre-formatar o texto na hora de visualizar no navegador
class StaticCallable {
    public static function foo($values) {
        return array_map('self::bar', $values);
    }

    public static function bar($value) {
        return "{$value}: 42";
    }

    public static function baz($values) {
        return array_map('static::qux', $values);
    }

    public static function qux($value) {
        return "{$value}: 123";
    }
}

class StaticExtension extends StaticCallable {
    public static function bar($value) {
        return "{$value}: Marvin the Paranoid Android";
    }

    public static function qux($value) {
        return "{$value}: Zaphod Beeblebrox";
    }
}

echo '<pre>';
print_r(StaticCallable::foo([1, 2, 3]));
print_r(StaticExtension::foo([1, 2, 3]));

print_r(StaticCallable::baz([1, 2, 3]));
print_r(StaticExtension::baz([1, 2, 3]));
echo '</pre>';
?>