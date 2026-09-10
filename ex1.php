<?php

$lista = [1,2,3,4,5,6,7,8,9,10];

foreach ($lista as $numero) {
    if ($numero >= $maior) {
        $maior = $numero;
    }   
}
echo "O maior número é: " . $maior; 
?>