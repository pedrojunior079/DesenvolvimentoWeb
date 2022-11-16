<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);


require __DIR__ . "/classes/AppTemplate.php";
require __DIR__ . "/classes/WebTemplate.php";



$appTemplate = new AppTemplate();
$webTemplate = new WebTemplate();

var_dump(
   $appTemplate,
   $webTemplate
);

use AppTemplate;
use WebTemplate as WebTemplate;

$appUseTemplate = new AppTemplate();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->firstName = "Pedro";
//$user->lastName = "Arns Junior";

//$user->setFirstName("Pedro");
//$user->setLastName("Arns Junior");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}!</p>";


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$pedro = $user->setUser(
    "Pedro",
    "Arns Junior",
    "pedro@gmail.com"
);

if(!$pedro){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$joao = new \Source\Qualifield\User();
$joao->setUser(
    "João",
    "Paulo",
    "joaopaulo@gmail.com"
);

$andre = new \Source\Qualifield\User();
$andre->setUser(
    "Andre",
    "Luiz",
    "andreluiz@gmail.com"
);


var_dump(
    $user,
    $joao,
    $andre
);