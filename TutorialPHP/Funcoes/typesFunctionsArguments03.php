<?php
function fazerigogurte($sabor, $recipiente = "tigela")
{
    return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
}

echo fazerigogurte("framboesa"); // "framboesa" é $sabor
?>
