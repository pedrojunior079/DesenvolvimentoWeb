<?php
$vars = ['id'=>'user_id','email'=>'user_email'];

validateVarsfunction($vars);

function validateVarsfunction($vars){

    //$vars['id']=34; <- não funciona
    // define variaveis permitidas
    $user_id=21;
    $user_email='email@mail.com';

    echo $vars['id'];  //imprime o nome da variavel: user_id
    echo ${$vars['id']}; //imprime 21
    echo 'Email: '.${$vars{'email'}}; //imprime email@mail.com

    // não temos o nome das variáveis antes de declará-las dentro da função
}
?>