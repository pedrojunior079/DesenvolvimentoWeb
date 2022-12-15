<?php
function fazercafe($tipos = array("cappuccino"), $cafeteria = NULL)
{
    $dispositivo = is_null($cafeteria) ? "mãos" : $cafeteria;
    return "Fazendo uma xicara de ".join(", ", $tipos)." com $dipositivos.\n";
}
echo fazercafe();
echo fazercafe(array("cappuccino", "lavazza"), "chaleira");
?>
