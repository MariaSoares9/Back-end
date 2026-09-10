<?php

$lista = ["Caso Indefinido", "Ele Quer Ser Eu", "Melhor Eu Ir", "Menos Foco Mais Ansiedade", "Tá Pedindo Toma", "Voltável"];

foreach ($lista as $musica) {
    echo $musica . "<br>";
}
$totaldemusicas = count($lista);
echo "O total de músicas é: " . $totaldemusicas;
?>