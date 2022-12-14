<?php
$stack = array('first', 'second', 'third', 'fourth', 'fifth');

foreach($stack AS $v){
    if($v == 'second')continue;
    if($v == 'fourth')break;
    echo $v.'<br>';
}
/*

first
third

*/

$stack2 = array('one'=>'first', 'two'=>'second', 'three'=>'third', 'four'=>'fourth', 'five'=>'fifth');
foreach($stack2 AS $k=>$v){
    if($v == 'second')continue;
    if($k == 'three')continue;
    if($v == 'fifth')break;
    echo $k.' ::: '.$v.'<br>';
}
?>