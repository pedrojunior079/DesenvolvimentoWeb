<?php
$numberOne = 0;
do {
    echo "<pre>";
    echo $numberOne;
    echo "</pre>";
    $numberOne++;
}while( $numberOne < 5 || incrementNumberTwo() );
function incrementNumberTwo() {
    echo "function incrementNumberTwo called";
    return false;
}
// outputs "01234function incrementNumberTwo called"
?>