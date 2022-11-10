<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
   "VueJs",
   "Angular",
   "ReactJs", 
];

$assoc = [
   "framework_1" => "VueJs",
   "framework_2" => "Angular",
   "framework_3" => "ReactJs" 
];

array_unshift($index, "", "NodeJs");
$assoc = ["framework_4" => "NodeJs", ""] + $assoc;

array_push($index, "");
$assoc = $assoc + ["framework_5" => ""];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

array_unshift($index, "");

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);



/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

krsort($index);
krsort($assoc);

sort($index);
sort($assoc);

rsort($index);
rsort($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    [
       array_keys($assoc),
       array_values($assoc)
    ]
);

if(in_array("VueJs", $assoc)){
    echo "<p>Bom framework!</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p>São ótimos para desenvolvimentos web: {$arrToString} e outros também</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Robson",
    "company" => "UpInside",
    "mail" => "cursos@upinside.com.br"
];

$template = <<<TPL
  <article>
     <h1>{{name}}</h1>
     <p>{{company}}</p>
     <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a>
  </article>   
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)). "}}";

//var_dump(explode("&", $replaces));
echo str_replace(
   explode("&", $replaces),
   array_values($profile), 
   $template
);
