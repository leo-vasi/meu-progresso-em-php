<?php
interface IAnimal {
    public function fazerSom();
}

class Cachorro implements IAnimal {
    public function fazerSom() {
        return "Late";
    }
}

class Gato implements IAnimal {
    public function fazerSom() {
        return "Mia";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

echo $cachorro->fazerSom();
echo "\n";
echo $gato->fazerSom();
?>
