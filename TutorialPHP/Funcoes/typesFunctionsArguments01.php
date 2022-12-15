<?php
function makecoffe($type = "cappuccino")
{
    return "Fazendo uma xicara de café $type.\n";
}
echo makecoffe();
echo makecoffe(null);
echo makecoffe("espresso");
?>