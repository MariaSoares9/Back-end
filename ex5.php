<?php

$lista = ["14 997379447", "11 40028922", "14 999055201", "14 998307471", "996677818"];
$soma = 0;
foreach ($lista as $n) {
    $soma += (int)$n;
}
echo "A soma dos números é: " . $soma;
?>  