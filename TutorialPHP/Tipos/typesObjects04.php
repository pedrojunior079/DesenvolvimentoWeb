<?php
class EmptyClass {
   
}

$obj = new stdClass();
//or any other class empty object
$emptyClassObj = new EmptyClass();
$array = array();

if (empty($array)) {
    echo 'array esta vazio'; //expected result
} else {
    echo 'array não esta vazio'; //unexpected result
}
echo "<br>";

if (empty($obj)) {
    echo 'objeto está vazio'; //expected result
} else {
    echo 'objeto não esta vazio'; //unexpected result
}
echo "<br>";

if (empty($emptyClassObj)) {
    echo 'EmptyClass está vazio'; //expected result
} else {
    echo 'EmptyClass não está vazio'; //unexpected result
}
echo "<br>";

//Result SET 1
//array is empty      => expected result
//object is not empty => ouch what happened
//EmptyClass is not empty => ouch what happened

/**
* So what we do for checking empty object
* @solution use any known property or check property count
* Or you can use below method
* Count function will not return 0 in empty object
*/

//Below line print "Object count:1"
echo 'Objeto contador:' . count($obj);

echo "<br>";

/**
* This function is used to get object item counts
* @function getCount
* @access public
* @param object|array $var
* @return integer
*/
function getCount($var) {
    $count = 0;
    if (is_array($var) || is_object($var)) {
        foreach ($var as $value) {
            $count++;
        }
    }
    unset($value);
    return $count;
}

//Running code again with new logic
if (getCount($array) === 0) {
    echo 'array está vazio'; //expected result
} else {
    echo 'array não está vazio'; //unexpected result
}
echo "<br>";

if (getCount($obj) === 0) {
    echo 'objeto está vazio'; //expected result
} else {
    echo 'objeto nãpo está vazio'; //unexpected result
}

echo "<br>";

if (getCount($emptyClassObj) === 0) {
    echo 'EmptyClass está vazio'; //expected result
} else {
    echo 'EmptyClass não esta vazio'; //unexpected result
}

//Result SET 2
//array is empty    => expected result  ##everything is all right
//object is empty   => expected result  ##everything is all right
//EmptyClass is empty   => expected result  ##everything is all right  
?>