<?php
echo "Digite seu nome: ";
$nome = readline();

echo "Digite sua idade: ";
$idade = readline();


if ($idade < 16) {
    echo "$nome, com $idade anos, ainda não pode votar.";
} elseif ($idade >= 16 && $idade < 18 || $idade >= 70) {
    echo "$nome, com $idade anos, o voto é opcional para você.";
} else {
    echo "$nome, com $idade anos, o voto é obrigatório para você.";
}
?>
