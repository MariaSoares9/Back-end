<?php

$nome = "Maria Clara Soares";
$senha = "12345";
$confirmaresenha = "12345";
$datadenascimento = "13/09/2009";

if ($nome !== "Maria Clara Soares") {
    echo "Nome vazio";
} else {
    echo "Nome preenchido";
}
echo "<br>";

if ($senha = $confirmar_senha = "12345"){;
echo "Acesso Liberado";
} else {
    echo "Usuário ou senha incorretos!";
}
echo "<br>";
 echo $datadenascimento;
?>