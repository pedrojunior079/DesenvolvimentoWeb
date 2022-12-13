<?php
echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<10; $n++) {
    
    echo ++$s . ' ';
    
}
echo PHP_EOL;

for ($n=10; $n>0; $n--) {
    echo "<pre>";
    echo (--$s) . ' ';
    echo "<pre/>";
}
?>