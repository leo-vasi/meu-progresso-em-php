<?php
//Variáveis:

$nome = "Zé Eduardo"; // Variável com o tipo de dado string, coloquei nome como exemplo.
$idade = 35; // Variável numérica inteira (INT), coloquei idade com exemplo.
$peso = 69.9; // Variável tipo float, mostra números decimais, dei peso como exemplo.
$medo_altura = true; // Variável tipo boeleano, perguntei se ele tem medo de altura para saber se é true ou false.
$lista_de_atributos = ["Zé Eduardo", 35, 69.9, true]; // É uma lista, coloquei todas as variáveis anteriores dentro dela.

echo $nome; // printa o nome, o comando echo é o equivalente ao print em outras linguagens.
var_dump($lista_de_atributos); // var_dump é um tipo de print mais preciso, ele printa algumas coisas que o echo não pode, como listas.
var_dump($medo_altura); // Booleano também não podem ser printados pelo echo, então var_dump também é utilizado aqui.


//Constantes:

define('pi', 3.14159265359); // 'define();', essa é a sintaxe para declarar uma constante, nesse exemplo eu usei o pi, já que ele é um valor que nunca será alterado.