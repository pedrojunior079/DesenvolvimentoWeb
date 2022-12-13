<?php
testFunctionNesting(3, 1, 1, 1);

function testFunctionNesting($max, $increment, $preIncrement, $postIncrement)
{   
    echo $increment.' - '.$preIncrement.' - '.$postIncrement;
    echo '<br>';
   
    if($increment>=$max)
    {
        $inc = $increment;
        $pre = $preIncrement;
        $post = $postIncrement;
        return;
    }
       
   
    testFunctionNesting($max, ($increment+1), (++$preIncrement), ($postIncrement++));
}
?>