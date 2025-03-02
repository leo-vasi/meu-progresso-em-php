<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

$pessoas = [
    new Pessoa("Alice", 28),
    new Pessoa("Bruno", 35),
    new Pessoa("Clara", 22)
];

foreach ($pessoas as $pessoa) {
    echo "{$pessoa->nome} tem {$pessoa->idade} anos.<br>";
}
?>
