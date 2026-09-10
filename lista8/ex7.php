<?php
$senhaCorreta = "1234";
$senha ="1111";
$tentatiavas = 0;

while ($tentatiavas < 3) {
    $tentatiavas++;
    if ($senha == $senhaCorreta) {
        echo "Senha correta. Acesso permitido!";
        break;
    } else {
        echo "Senha incorreta! <br>";
    }
}
?>